<?php
// PHP - Random Quote Generator

// Multidimensional array of quotes
$quotes = array(
  array(
    "quote" => "A coward dies a thousand deaths, the brave just one.",
    "source" => "Anonymous",
    "citation" => "",
    "year" => null,
    "type" => "General" 
  ),
  array(
    "quote" => "Don't find fault, find a remedy; anybody can complain.",
    "source" => "Henry Ford",
    "citation" => "Book",
    "year" => 1954,
    "type" => "Business" 
  ),
  array(
    "quote" => "Just walk beside me, and be my friend.",
    "source" => "Albert Camus",
    "citation" => "Book",
    "year" => 1900,
    "type" => "Philosophy" 
  ),
  array(
    "quote" => "In the future everyone will be famous for 15 minutes.",
    "source" => "Andy Warhol",
    "citation" => "Interview",
    "year" => 1967,
    "type" => "Art" 
  ),
  array(
    "quote" => "Once You Are Dead, You Are Made for Life.",
    "source" => "Jimi Hendrix",
    "citation" => "Interview",
    "year" => 1969,
    "type" => "Music" 
  ),
  array(
    "quote" => "Showing Up Is 80 Percent of Life",
    "source" => "Woody Allen",
    "citation" => "Interview",
    "year" => 1977,
    "type" => "Film" 
  ),
  array(
    "quote" => "A guilty conscience needs no accuser.",
    "source" => "Anonymous",
    "citation" => "",
    "year" => null,
    "type" => "General" 
  ),
  array(
    "quote" => "The happiness of your life depends upon the quality of your thoughts.",
    "source" => "Marcus Aurelius",
    "citation" => "Meditations",
    "year" => 180,
    "type" => "Philosophy" 
  ),
  array(
    "quote" => "Contentment is not the fulfillment of what you want, but the realization of how much you already have.",
    "source" => "Anonymous",
    "citation" => "",
    "year" => null,
    "type" => "Philosophy" 
  ),
  array(
    "quote" => "Someday I will learn to stop procrastinating, but today is not the day.",
    "source" => "Anonymous",
    "citation" => "",
    "year" => null,
    "type" => "General" 
  )
  );



// takes an array as an argument
// checks for the length of array and creates a random number
// between 0 and max array - gets a random entry
// returns selected array out of the multi array
function getRandomQuote($array) {
  //get random int between 1 and size of quotes array
  $randomNumber = rand(0, sizeof($array)-1);

  //return randomly selected quote
  return $array[$randomNumber];
}

// Gets all the array values and builds a complete string
// with HTML and all available values.
// printQuote is called from within index.php
function printQuote($array) {
  //call getRandomQuote
  $getQuote = getRandomQuote($array);
  //set empty string
  $stringWithQuote = "";

  // get array values
  $quote = $getQuote["quote"];
  $source = $getQuote["source"];
  $citation = $getQuote["citation"];
  $year = $getQuote["year"]; 
  $type = $getQuote["type"];

  // check if citation has a value and add html or an empty string
  if ($citation) {
    $citationIsNotEmpty = "<span class=\"citation\">" . $citation . "</span>";
  } else {
    $citationIsNotEmpty = "";
  }

  // check if year is given and add html or an empty string
  if (isset($year)) {
    $yearIsSet = "<span class=\"year\">" . $year . "</span>";
  } else {
    $yearIsSet = "";
  }

  // build complete string
  $stringWithQuote = "<p class=\"quote\">" . $quote . "</p>" .
                     "<p class=\"source\">" . $source . 
                     $citationIsNotEmpty . 
                     $yearIsSet . 
                     "<span class=\"year\">" . $type . "</span>" .
                     "</p>";


  // display string
  echo $stringWithQuote;                      
}
