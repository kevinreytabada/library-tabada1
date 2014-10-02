<?php
/**
 * Update an existing Cribbb
 *
 * @param int $id
 * @return Redirect
 */
class AdminController extends BaseController {

	// display all books
	public function books()
	{
		$books =  Book::all();

		return View::make('admin.books')->with('books',$books);
	}
	//add books
	public function addBooks()
	{
		return View::make('admin.addbooks');
	}
	//create books
	public function createBooks()
	{
		$input = Input::all();

		$books = new Book;

		$books->ISBN = $input['isbn'];
		$books->title = $input['title'];
		$books->author = $input['author'];
		$books->description = $input['description'];
		$books->category = $input['category'];
		$books->quantity = $input['quantity'];

		$books->save();

		return Redirect::to('books');
	}
	//edit books
	public function editBooks($id)
	{
		$books = Book::find($id);

		return View::make('admin.editbooks')->with('books', $books);
	}
	//update books
	public function updateBooks()
	{
       $bookId = Input::get('id');

       Book::update($bookId, array(
       		'ISBN' => Input::get('isbn'),
       		'title' => Input::get('title'),
       		'author' => Input::get('author'),
       		'description' => Input::get('description'),
       		'category' => Input::get('category'),
       		'quantity' => Input::get('quantity')
       	));
    }
    //delete books
    public function deleteBooks($id)
    {
    	$books = Book::find($id);
    	$books->delete();
    	return Redirect::to('books');
    }
    //get book issue
    public function issueBooks()
    {
    	return View::make('admin.issuebooks');
    }
    //get transaction
    public function transactions()
    {
    	$transactions = DB::table('transactions')
            ->join('books', 'transactions.id', '=', 'books.id')
            ->join('borrowers', 'transactions.id', '=', 'borrowers.id')
            // ->select('borrowers','books')
            ->get();

    	return View::make('admin.transactions')->with('transactions',$transactions);
    }
    //get transaction details by id
    public function transactionDetails($id)
    {	

    	$transactions = DB::table('transactions')
            ->join('books', 'transactions.id', '=', 'books.id')
            ->join('borrowers', 'transactions.id', '=', 'borrowers.id')
            ->Where('transactions.id', '=', $id)
            ->get();

    	return View::make('admin.transactiondetails')->with('transactions', $transactions);
    }

	public function bookIssueSearchName()
	{

	    $borrower_code = Input::get('code');

		$books = DB::table('borrowers')
            ->where('borrower_code', '=', $borrower_code)
            ->get();

        return View::make('admin.sample')->with('books', $books);
	}
}
