<?php

class NameGen{

	public $adjectives;
	public $nouns;
	public $data = array();
	public $random_element;
	public $array1;
	public $data['adjectives'] = random($adjectives);
    public $data['nouns'] = random($nouns);

	public function setupGen($adjectives, $nouns)
	{
		$this->adjectives = array['big', 'small', 'brown', 'gold', 'sad', 'gordo', 'tiny', 'long', 'angry', 'baked'];
		$this->nouns = array['Boxer', 'Pitbull', 'Lab', 'Golden retriever', 'Poodle', 'Pug', 'Great Dane', 'shih Tzu', 'Chow Chow', 'Basset Hound'];
	}	


public function random ($array1) {
        $this->random_element = array_rand($array1);
        return $array1[$random_element];
    }
   
    return $data;

}    