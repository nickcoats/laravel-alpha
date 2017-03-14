<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Article;
use App\Bio;
use Carbon\Carbon;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Pages Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$active_page = "Investment & Wealth Management";
		return view('index', compact('active_page'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function services()
	{
		$active_page = "Our Approach";
		return view('approach', compact('active_page'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function investment_wealth_management()
	{
		$active_page = "Investment & Wealth Management";
		return view('services.investment_wealth_mgmt', compact('active_page'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function business_estate_planning()
	{
		$active_page = "Business & Estate Planning";
		return view('services.business_estate_planning', compact('active_page'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function insurance_long_term_care()
	{
		$active_page = "Life Insurance & Long Term Care";
		return view('services.insurance_longterm_care', compact('active_page'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function corporate_retirement_plans()
	{
		$active_page = "Corporate Retirement Plans";
		return view('services.corporate_retirement', compact('active_page'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function family_office_services()
	{
		$active_page = "Family Office Services";
		return view('services.family_office_services', compact('active_page'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function about()
	{
		$active_page = "About Alpha Capital Management Group";
		return view('about', compact('active_page'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function team()
	{
		$active_page = "Alpha Capital Management Team";
		$managingPartners = Bio::where('position', '=', 1)->get();
		$partners = Bio::where('position', '=', 2)->get();
		$assistants = Bio::where('position', '=', 3)->get();

		return view('team', compact('managingPartners','partners','assistants','active_page'));
	}


	/**
	 * Show the team members profile.
	 *
	 * @return Response
	 */
	public function team_member($member)
	{
		try
		{
			$member = Bio::where('slug', '=', $member)->firstorfail();
			$member_photo = "img/" . $member->photo . "_bio.jpg";
			$active_page = "Alpha Capital Management Team";

			return view('team_member', compact('member','member_photo','active_page'));
		}
		// catch(Exception $e) catch any exception
		catch(ModelNotFoundException $e)
		{
			return redirect('team');
		}

	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function articles()
	{
		$active_page = "News & Education";
		//$articles = Article::orderBy('published_at', 'desc')->get();
		$articles = Article::Published()->orderBy('published_at', 'desc')->get();

		$posts = array();

		foreach($articles as $article) {
			$post["title"] 		= $article->title;
			$post["category"] = $article->category;
			$post["slug"] 		= $article->slug;
			$post["class"]		= "post-";
			// Add the correct class for the colors of the boxes
			if($article->category == "Investment & Wealth Management") {
				$post["class"] .= "lightblue";
			}
			if($article->category == "Business & Estate Planning") {
				$post["class"] .= "green";
			}
			if($article->category == "Insurance & Long Term Care") {
				$post["class"] .= "teal";
			}
			if($article->category == "Corporate Retirement Plans") {
				$post["class"] .= "darkblue";
			}
			if($article->category == "Family Office Services") {
				$post["class"] .= "brown";
			}

			array_push($posts, $post);
		}

		return view('articles', compact('active_page','posts'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function view_article($slug)
	{
		try {
			$active_page = "News & Education";
			$article = Article::where('slug', '=', $slug)->firstorfail();
			$latest_articles = Article::select('title','published_at')->orderBy('published_at', 'desc')->take(5)->get();

			return view('article', compact('active_page','article','latest_articles'));
		} catch (ModelNotFoundException $e) {
			return redirect('news-education');
		}


	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function contact()
	{

		// Make the page validate
		ini_set('session.use_trans_sid', '0');

		// Create a random string, leaving out 'o' to avoid confusion with '0'
		$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

		// Concatenate the random string onto the random numbers
		// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
		// '0' is left out to avoid confusion with 'O'
		$str = rand(1, 7) . rand(1, 7) . $char;

		// Adjust Session Save Path
		ini_set('session.save_path', '/tmp');

		// Begin the session
		session_start();

		// Set the session contents
		$_SESSION['captcha_id'] = $str;

		$active_page = "Contact Alpha Capital Management Group";

		return view('contact', compact('active_page'));
	}

}
