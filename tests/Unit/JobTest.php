<?php

use App\Models\Employer;

test('it belongs to an employer', function () {
    //arrange
  $employer = Employer::factory()->create();
  $job = \App\Models\Job::factory()->create([
      'employer_id' => $employer->id,
  ]);

    //act and assert
//    expect($job->employer)->toBe($employer);
   expect($job->employer->is($employer))->toBeTrue();

});

it('can have tags',function (){
    //arrange
    $job = \App\Models\Job::factory()->create();

    $job->tag('frontend');

    expect($job->tags)->toHaveCount(1);

});
