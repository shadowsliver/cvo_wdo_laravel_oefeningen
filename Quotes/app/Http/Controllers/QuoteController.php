<?php
namespace App\Http\Controllers;

use App\Quote;
use App\Http\Requests\SaveQuoteRequest;
use App\Http\Requests;


class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::all();
        return view('quote.index', compact('quotes'));
    }

    public function show($id)
    {
        $quote = Quote::findOrFail($id);
        return view('quote.index', compact('quote'));
    }

      public function create()
    {
        $quote = new Quote;
        return view('quote.index', compact('quote'));
    }

    public function store(SaveQuoteRequest $request)
    {
        Quote::create($request->only('name', 'quote'));
        return redirect(route('quote.index'));
    }

    public function edit($id)
    {
        $quote = Quote::findOrFail($id);
        return view('quote.edit', compact('quote'));
    }

    public function update(SaveQuoteRequest $request, $id)
    {
        $quote = Quote::findOrFail($id);
        $quote->update($request->only('name', 'quote'));
        return redirect(route('quote.index'));
    }

    public function destroy($id)
    {
        $quote = Quote::findOrFail($id)->delete();
        return redirect(route('quote.index'));
    }
    public function destroyConfirm($id)
    {
        $quote = Quote::findOrFail($id);
        return view('quote.index', compact('quote'));
    }
}