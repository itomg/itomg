<?php

if(substr($dao_name, 0, 5) == 'Rest_')
{
	$dao_name = substr($dao_name, 5);
}