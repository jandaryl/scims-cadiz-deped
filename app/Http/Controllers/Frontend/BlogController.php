<?php

namespace App\Http\Controllers\Frontend;

use PDF;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\School;
use App\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use App\Repositories\Contracts\PostRepository;

class BlogController extends FrontendController
{
    /**
     * @var PostRepository
     */
    protected $posts;

    /**
     * Create a new controller instance.
     *
     * @param \App\Repositories\Contracts\PostRepository $posts
     */
    public function __construct(PostRepository $posts)
    {
        parent::__construct();

        $this->posts = $posts;
    }

    public function index()
    {
        return view('frontend.blog.index')->withPosts(
            $this->posts->published()->paginate(12)
        );
    }

    public function pdf()
    {
        $posts = Post::published()->latest()->paginate(8);

        return view('frontend.pdf.posts')->withPosts(
            $posts
        );
    }

    public function export_pdf($id)
    {
        $post = Post::find($id);

        $pdf = PDF::loadHTML(
            View::make('frontend.pdf.posts', compact('post'))->render()
        );
        $now = date('Y-m-d');
        // return $pdf->download("{$post->slug}-{$now}.pdf");
        return $pdf->stream("{$post->slug}-{$now}.pdf");
    }

    public function home()
    {
        return view('frontend.home')->withPosts($this->posts->published()->paginate(4));
    }

    public function schoolInfo($id)
    {
        $school = School::find($id);
        $tag_school = Tag::findOrCreate($school->school_name);

        return view('frontend.pages.school-information', compact('school'))->withTag($tag_school)->withPosts(
            $this->posts->publishedByTag($tag_school)->paginate(8)
        );
    }

    public function tag(Tag $tag)
    {
        $this->setTranslatable($tag);

        return view('frontend.blog.tag')->withTag($tag)->withPosts(
            $this->posts->publishedByTag($tag)->paginate(9)
        );
    }

    public function owner(User $user)
    {
        $this->setLocalesAttributes(['user' => $user->slug]);

        return view('frontend.blog.owner')
            ->withUser($user)
            ->withPosts($this->posts->publishedByOwner($user)->paginate(9));
    }

    public function show(Post $post, Request $request)
    {
        // If not published, only user with edit access can see it
        if (!$post->published && !Gate::check('update', $post)) {
            abort(404);
        }

        SEOMeta::setTitle($post->meta_title);
        SEOMeta::setDescription($post->meta_description);

        $this->setTranslatable($post);

        return view('frontend.blog.show')->withPost($post);
    }
}
