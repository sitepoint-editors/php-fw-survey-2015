<?php
function getLevelByEducation($ed = null)
{
    $levels = [
        "None" => 1,
        "Vocational School / Community College" => 2,
        "Mainly Online Courses like Udacity, Coursera, CodeAcademy" => 3,
        "Went to CS/programming College/University - didn't finish" => 4,
        "Went to CS/programming College/University - finished" => 5,
        "Master's Degree in CS / programming" => 6,
        "PhD in CS / programming" => 7
    ];

    return ($ed) ? $levels[$ed] : $levels;
}

function getEducationByLevel($level = null)
{
    $levels = array_flip(getLevelByEducation());

    return ($level) ? $levels[$level] : $levels;
}

/**
 * @param null $ag
 * @return int|array
 */
function getGroupByAgeGroup($ag = null)
{
    $groups = [
        "Under 18" => 1,
        "18 - 25" => 2,
        "26 - 35" => 3,
        "36 - 45" => 4,
        "45+" => 5
    ];

    return ($ag) ? $groups[$ag] : $groups;
}

/**
 * @param null $ag
 * @return array|string
 */
function getAgeGroupByGroup($ag = null)
{
    $groups = array_flip(getGroupByAgeGroup());

    return ($ag) ? $groups[$ag] : $groups;
}
