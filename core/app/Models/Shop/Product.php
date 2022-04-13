<?php

    namespace App\Models\Shop;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;

    class Product extends Model {
        use HasFactory;

        protected $fillable = [
            'title',
            'description',
            'price',
            'quantity'
        ];

        public function categories(): BelongsToMany {
            return $this->belongsToMany( Category::class );
        }
    }
