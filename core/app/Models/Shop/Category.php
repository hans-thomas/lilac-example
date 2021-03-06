<?php

    namespace App\Models\Shop;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;

    /**
 * @mixin IdeHelperCategory
 */
class Category extends Model {
        use HasFactory;

        protected $fillable = [
            'name'
        ];

        public function products(): BelongsToMany {
            return $this->belongsToMany( Product::class );
        }
    }
