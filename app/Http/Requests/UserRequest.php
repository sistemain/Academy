<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Http\JsonResponse;

use Log;
class UserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true; // Remember!!
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			"name" => "required",
			"lastname" => "required",
			"email" => "required|email|unique:users",
			"username" => "required|unique:users",
            'password' => 'required|confirmed|min:8',
		];
	}

	public function response(array $errors)
    {
    	Log::info("Entre");
    	return new JsonResponse($errors, 422);
    }

}
