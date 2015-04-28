<?php namespace App\Http\Middleware;

use Closure;
use Log;
use App;
class Before {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		Log::info("Before");
		App::setLocale('es');
		return $next($request);
	}

}
