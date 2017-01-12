<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * A class that represents a student
 *
 * @author Matt Goerwell
 */
class Student {
    /*
     * Student constructor
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /*
     * Adds an email to the current student. Multiple emails are acceptable
     * @param $which, The identifier for the email address
     * @param $address, the actual email address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /*
     *  Adds a grade to the students academic record
     * @param $grade the grade to be added.
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /*
     * A funtction that calulates the average grade for the student 
     * based on all that are available.
     * @return the student's average grade.
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /*
     * The display method for the student. Displays their name, average
     * and any email adresses associated with them.
     * @return a string containing the student's details
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
