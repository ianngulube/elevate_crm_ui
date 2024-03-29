<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalLinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'effective_date_appointment'=>$this->faker->date,
            'contact_person_1' =>$this->faker->name,
            'id_number_1'=>$this->faker->name,
            'contact_person_2'=>$this->faker->name,
            'id_number_2'=>$this->faker->name,
            'name_of_signatory'=>$this->faker->name,
            'contact_number'=>$this->faker->name,
            'date' =>$this->faker->date,
            'signature_file'=>"test"
        ];
    }
}
