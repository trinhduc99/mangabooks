<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\Recursive;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategory;
use App\Product;
use App\Traits\DeleteModelTrait;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use DataTables;
use Response;

class CategoryController extends Controller
{
    use DeleteModelTrait;
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $htmlOptions = $this->getCategory($parentId = '');
        return view('admin.category.add', compact('htmlOptions'));
    }

    public function store(CategoryRequest $categoryRequest)
    {
        $category = $this->category->create([
            'name' => $categoryRequest->name,
            'parent_id' => $categoryRequest->parent_id,
            'slug' => Str::slug($categoryRequest->name)
        ]);
        if ($category) {
            alert()->success('Category Created', 'Successfully');
        } else {
            alert()->error('Category Created', 'Something went wrong!');
        }
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = $this->category->find($id);
        $htmlOptions = $this->getCategory($category->parent_id);
        return view('admin.category.edit', compact('htmlOptions', 'category'));
    }

    public function show($id)
    {
        $category = $this->category->find($id);
        return view('admin.category.show', compact('category'));
    }

    public function update(UpdateCategory $categoryRequest, $id)
    {

        $category = $this->category->find($id)->update([
            'name' => $categoryRequest->name,
            'parent_id' => $categoryRequest->parent_id,
            'slug' => Str::slug($categoryRequest->name)
        ]);
        if ($category) {
            alert()->success('Category Updated', 'Successfully');
        } else {
            alert()->error('Category Updated', 'Something went wrong!');
        }
        return redirect()->route('categories.index');
    }

    public function delete($id, Category $category)
    {
        Product::where('category_id',$id)->delete();
        Category::where('parent_id',$id)->delete();
        return $this->deleteModelTrait($id, $category);
    }

    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recursive = new Recursive($data);
        return $recursive->categoryRecursive($parentId);
    }
}


