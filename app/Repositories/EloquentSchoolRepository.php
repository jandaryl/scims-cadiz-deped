<?php

namespace App\Repositories;

use Exception;
use App\Models\School;
use Illuminate\Http\UploadedFile;
use App\Exceptions\GeneralException;
use App\Repositories\Contracts\SchoolRepository;

/**
 * Class EloquentSchoolRepository.
 */
class EloquentSchoolRepository extends EloquentBaseRepository implements SchoolRepository
{
    /**
     * EloquentSchoolRepository constructor.
     *
     * @param School $school
     */
    public function __construct(School $school)
    {
        parent::__construct($school);
    }

    /**
     * @param array $input
     *
     * @throws \Exception|\Throwable
     *
     * @return \App\Models\School
     */
    public function store(array $input, UploadedFile $image = null, UploadedFile $image2 = null)
    {
        /** @var School $school */
        $school = $this->make($input);

        if (!$this->save($school, $input, $image, $image2)) {
            throw new GeneralException(__('exceptions.backend.schools.create'));
        }

        return $school;
    }

    /**
     * @param School  $school
     * @param array $input
     *
     * @throws Exception
     * @throws \Exception|\Throwable
     *
     * @return \App\Models\School
     */
    public function update(School $school, array $input, UploadedFile $image = null, UploadedFile $image2 = null)
    {
        $school->fill($input);

        if (!$this->save($school, $input, $image, $image2)) {
            throw new GeneralException(__('exceptions.backend.schools.update'));
        }

        return $school;
    }

    /**
     * @param \App\Models\School $school
     * @param array            $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    private function save(School $school, array $input, UploadedFile $image = null, UploadedFile $image2 = null)
    {
        if (!$school->save($input)) {
            return false;
        }

        // Featured image
        /** @var Media $currentFeaturedImage */
        $currentFeaturedImage = $school->getMedia('featured image')->first();
        $currentLogoImage = $school->getMedia('logo image')->first();

        // Delete current image if replaced or delete asking
        if ($currentFeaturedImage && ($image || !$input['has_featured_image'])) {
            $currentFeaturedImage->delete();
        }

        // Delete current image if replaced or delete asking
        if ($currentLogoImage && ($image2 || !$input['has_logo_image'])) {
            $currentLogoImage->delete();
        }

        if ($image) {
            $school->addMedia($image)
                ->toMediaCollection('featured image');
        }

        if ($image2) {
            $school->addMedia($image2)
                ->toMediaCollection('logo image');
        }

        return true;
    }

    /**
     * @param School $school
     *
     * @throws \Exception|\Throwable
     *
     * @return bool|null
     */
    public function destroy(School $school)
    {
        if (!$school->delete()) {
            throw new GeneralException(__('exceptions.backend.schools.delete'));
        }

        return true;
    }
}
