<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDocumentRequest;

class BookController extends Controller
{
    //
    public function index()
    {
        Book::all();
        $books = Book::all();

        return view('dashboard.books.index', compact('books'));
    }

    public function create()
    {
        return view('dashboard.books.form');
    }
    public function store(StoreDocumentRequest $request)
    {

        $validated = $request->validated();
        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('books', 'public'); // Store in 'public/books' directory
            $fileName = $file->getClientOriginalName();
        } else {
            $filePath = null;
            $fileName = null;
        }

        // // Create new book record
        Book::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'is_available' => $request->input('is_active', 'yes'),
            'file_path' => $filePath,
            'file_name' => $fileName,
        ]);
        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $books = Book::where('id', $id)->first();
        return view('dashboard.books.form', ['book' => $books]);
    }
    public function update(StoreDocumentRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        $validated = $request->validated();

        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('books', 'public'); // Store in 'public/books' directory
            $fileName = $file->getClientOriginalName();

            // Optionally, delete the old file if it exists
            if ($book->file_path) {
                \Storage::disk('public')->delete($book->file_path);
            }
        } else {
            $filePath = $book->file_path; // Keep existing file path if no new file is uploaded
            $fileName = $book->file_name; // Keep existing file name if no new file is uploaded
        }

        // Update book record
        $book->update([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'is_available' => $request->input('is_active', 'yes'),
            'file_path' => $filePath,
            'file_name' => $fileName,
        ]);

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        // Optionally, delete the associated file if it exists
        if ($book->file_path) {
            \Storage::disk('public')->delete($book->file_path);
        }

        $book->delete();

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus.');
    }
    public function download($id)
    {

        $book = Book::where('id', $id)->first();
        $path = $book->file_path;

        $disk = Storage::disk('public');

        if (!$disk->exists($path)) {
            abort(404, 'File tidak ditemukan.');
        }
        $baseName = $book->file_name;
        return $disk->download($path, $baseName);
    }
}
