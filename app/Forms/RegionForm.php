<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Region;

class RegionForm extends Form
{
  protected $clientValidationEnabled = false;
  public function buildForm()
  {
    if ($this->getModel() && $this->getModel()->id) { //edition d"un modele
      $mode = "edition";
      $url = route("interest.update", $this->getModel()->id);
      $method = "PUT";
      $label = __("Save");
    } else { //creation de modele
      $mode = "creation";
      $url = route("interest.store");
      $method = "POST";
      $label = __("Save");
    }
    $this
    ->add("name", "text", [
      "label" => "Nom de la région *",
      "rules" => "required",
      "error_messages" => [
        "name.required" => "Veuillez associer votre ville à une région",
      ]
    ]);
    $this->formOptions = [
      "method" => $method,
      "url" => $url
    ];
  }

}
