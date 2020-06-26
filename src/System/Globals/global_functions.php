<?php 

/**
 * Checks whether an array has a key by using both
 * isset and array_key_exists
 * @param  array $array the array to check
 * @param  string $key  the key to search for
 * @return bool        TRUE if the key exists. FALSE otherwise
 */
function arrayHasKey(string $key, array $array): bool 
{

	return (isset($array[$key]) || \array_key_exists($key, $array));
}

function autoAppendPathSeperator(string $path): string
{
	return \rtrim($path, \DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR;
}


?>