<?php

    namespace App\Http\Controllers\V1\Shop;

    use App\Http\Controllers\Controller;
    use App\Models\Shop\Category;
    use App\Models\Shop\Set;
    use Illuminate\Database\Eloquent\Builder;

    class CategoryController extends Controller {
        public function show( Category $category ) {
            return view( 'pages.category-index', [
                'sets' => Set::query()
                             ->with( 'products' )
                             ->whereHas( 'products', fn( Builder $builder ) => $builder->whereHas( 'categories',
                                 fn( Builder $builder ) => $builder->where( 'category_product.category_id',
                                     $category->id ) ) )
                             ->paginate()
            ] );
        }
    }
