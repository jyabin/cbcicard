<?php

   $options[] = array( "name" => "Event",
    					"sicon" => "mail.png",
                        "type" => "heading");
                        
   $options[] = array( "name" => "Event Name",
                        "id" => $shortname."_event_name",
                      "std" => "Supplier Management Excellence",
                        "type" => "text");
                        
   $options[] = array( "name" => "Event Date",
                        "id" => $shortname."_event_date",
                        "std" => "Sunday 26th October 2014",
                        "type" => "text");
                        
   $options[] = array( "name" => "Event Location",
                        "id" => $shortname."_event_location",
                         "std" => "Barcelona, Spain",
                        "type" => "text");                  
   $options[] = array( "name" => "Event Details",
                        "id" => $shortname."_event_details",
                        "std" => "Supply chain is entering a new era with a wider impact on the business and a higher level of accountability for its action succeed.",
                        "type" => "textarea");
                        
  $options[] = array( "name" => "Event Price",
                        "id" => $shortname."_event_Price",
                        "std" => "00",
                        "type" => "text");
 $options[] = array( "name" => "Event Currency",
                        "id" => $shortname."_event_currency",
                        "std" => "Select Currency",
                        "type" => "select","options" => array(" "=>"Select Currency","$"=>"USD","£"=>"GBP"));
 $options[] = array( "name" => "Event Tax",
                        "id" => $shortname."_event_tax",
                        "std" => "Select Currency",
                        "type" => "select","options" => array(" "=>"Select Currency","1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9">="9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20"));
                        
                                 
 
                        
?>