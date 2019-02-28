<?php

namespace App\Repositories\Contracts;

use App\Models\School;

/**
 * Interface SchoolRepository.
 */
interface SchoolRepository extends BaseRepository
{
    /**
     * @param array $input
     *
     * @return mixed|School
     */
    public function store(array $input);

    /**
     * @param School  $school
     * @param array $input
     *
     * @return mixed|School
     */
    public function update(School $school, array $input);

    /**
     * @param School $school
     *
     * @return mixed
     */
    public function destroy(School $school);
}
