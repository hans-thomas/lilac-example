<?php

    namespace App\Models\Shop;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;

    class Set extends Model {
        use HasFactory;

        protected $fillable = [
            'name',
            'description',
        ];

        public function products(): BelongsToMany {
            return $this->belongsToMany( Product::class );
        }
    }
