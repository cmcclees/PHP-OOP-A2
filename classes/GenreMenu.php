<?php
class GenreMenu{

    public $genres;
    public $name;

    public function __construct($name, $genres) {
        $this->genres = $genres;
        $this->name = $name;
    }

    public function __toString() {
        $dropdown = '<select name="'.$this->name.'" id="'.$this->name.'">'."\n";

        /*** loop over the options ***/
        foreach( $this->genres as $genre)
        {
            /*** add each option to the dropdown ***/
            $dropdown .= '<option value="'.$genre->id.'">'.$genre->genre.'</option>'."\n";
        }

        /*** close the select ***/
        $dropdown .= '</select>'."\n";

        /*** and return the completed dropdown ***/
        return $dropdown;
    }
}
?>