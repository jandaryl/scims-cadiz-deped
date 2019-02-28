<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use App\Models\School;
use Illuminate\Http\Request;
use App\Utils\RequestSearchQuery;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Repositories\Contracts\SchoolRepository;

class SchoolController extends BackendController
{
    /**
     * @var SchoolRepository
     */
    protected $schools;

    /**
     * Create a new controller instance.
     *
     * @param SchoolRepository $schools
     */
    public function __construct(SchoolRepository $schools)
    {
        $this->schools = $schools;
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     *
     * @throws \Exception
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function search(Request $request)
    {
        $query = $this->schools->query();

        $requestSearchQuery = new RequestSearchQuery($request, $query);

        return $requestSearchQuery->result([
            'id',
            'school_name',
            'school_id',
            'district',
            'principal_name',
            'no_of_students',
            'no_of_teachers',
            'no_of_classrooms',
            'address',
            'contact_no',
            'created_at',
            'updated_at',
        ]);
    }

    /**
     * @param School $school
     *
     * @return School
     */
    public function show(School $school)
    {
        return $school;
    }

    /**
     * @param StoreSchoolRequest $request
     *
     * @return mixed
     */
    public function store(StoreSchoolRequest $request)
    {
        $this->authorize('create schools');

        $this->schools->store($request->input());

        Tag::findOrCreate($request->input('school_name'));

        return $this->redirectResponse($request, __('alerts.backend.schools.created'));
    }

    /**
     * @param School              $school
     * @param UpdateSchoolRequest $request
     *
     * @return mixed
     */
    public function update(School $school, UpdateSchoolRequest $request)
    {
        $this->authorize('edit schools');

        $this->schools->update($school, $request->input());

        Tag::findOrCreate($request->input('school_name'));

        return $this->redirectResponse($request, __('alerts.backend.schools.updated'));
    }

    /**
     * @param School    $school
     * @param Request $request
     *
     * @return mixed
     */
    public function destroy(School $school, Request $request)
    {
        $this->authorize('delete schools');

        $this->schools->destroy($school);

        return $this->redirectResponse($request, __('alerts.backend.schools.deleted'));
    }
}
