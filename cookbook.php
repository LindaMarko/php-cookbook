<?php

include('classes/recipes.php');
include('classes/render.php');

$recipe1 = new Recipe("my first recipe");
$recipe1->setSource = "Grandma Holligan";
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->setSource = "Betty Crocker";

$recipe1->addInstruction("First instruction");
$recipe1->addInstruction("Second instruction");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

$recipe1->setYield("6 servings");

echo Render::displayRecipe($recipe1);

// echo $recipe1;
// echo new Render();