<?php
namespace App;

class Autoloader
{
	static function register()
	{
		spl_autoload_register([
			__CLASS__,
			'autoload'
		]);
	}
	
	static function autoload($className)
	{
		// On récupére dans $className la totalité du namespace
		// de la classe concernée.
				
		// On retire App\
		$className = str_replace(__NAMESPACE__ . '\\', '', $className);
	
		// Onremplace les \ par des /
		// pour créer le chemin d'accès à nos fichiers
		$className = str_replace('\\', '/', $className);
		
		// On vérifie si le fichier existe
		$classPath = __DIR__ . DIRECTORY_SEPARATOR . $className . '.php'; 
		if(file_exists($classPath)){
			require_once ($classPath);
		}
		return true;			
	}
	// N.B. : ne pas oublier d'ajouter au fichier index.php ce qui suit
	// require_once 'classes/Autoloader.php';
	// Autoloader::register();
	
	// Tous les namespaces doivent commencer par App\
	// Le fichier Autoloder.php doit se trouver à la racine de /src
}
