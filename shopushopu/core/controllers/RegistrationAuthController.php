<?php

/*
|---------------------------------------------------------------
| Methods to be defined from analysis
|---------------------------------------------------------------
| (1) authenticate
| (2) validate
*/
interface RegistrationAuthController
{
	
	public function authenticate();

	public function validate();

}