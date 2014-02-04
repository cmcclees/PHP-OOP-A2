<?php
/**
 * Created by PhpStorm.
 * User: cmcclees
 * Date: 1/28/14
 * Time: 5:15 PM
 */

class ArtistMenu {

    public $artists;
    public $name;

    public function __construct($name, $artists) {
        $this->name = $name;
        $this->artists = $artists;
    }

    public function __toString() {
        $dropdown = '<select name="'.$this->name.'" id="'.$this->name.'">'."\n";

        /*** loop over the options ***/
        foreach( $this->artists as $artist)
        {
            /*** add each option to the dropdown ***/
            $dropdown .= '<option value="'.$artist->id.'>'.$artist->artist_name.'</option>'."\n";
        }

        /*** close the select ***/
        $dropdown .= '</select>'."\n";

        return $dropdown;
    }


} 