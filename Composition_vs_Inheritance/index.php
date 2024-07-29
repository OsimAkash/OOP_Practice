<?php

// Code re-use

// যখনই আমরা OOP তে ক্লাস ডিজাইন করতে যাব একেকটি ক্লাস আরও অনন্য ক্লাসকে use করে কাজ করবে সেই সিনোওরাতিতে চিন্তা করে দেখতে হবে Composition লাগবে নাকি Inheritance  লাগবে  it's best use case

// Composition

// Obj -> Compose


// Vehicle has a ->  engine used composition 
class Vehicle {
    private Engine $engine;

    public function start() {
        $this->engine->start();
    }
}


class Engine {
    private $model;
    private $brandl;

    public function start() {

    }
}

// $vehicle = new Vehicle();


// // Inheritance part: 

// class Mobile {

// }

// // is a -> inheritance

// class AppleMobile extends Mobile {

// }

// class Iphone extends AppleMobile {

// }



// OOP principle: Favour composition over inheritance

// // Inheritance
// class Book {
//     protected $number_of_page;
//     public function purchase() {
//         //
//     }

//     public function lend() {
//         //
//     } 
// }

// // Composition 
// class AudioBook {
//     public Book $book;
//     public function listen(){

//     } 

// }

// class EBook extends Book {

// }