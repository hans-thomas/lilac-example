<?php

    namespace App\Models\Shop;

    use Hans\Lilac\Traits\LilacTrait;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;

    /**
 * @mixin IdeHelperProduct
 */
    class Product extends Model {
        use HasFactory;
        use LilacTrait, LilacTrait {
            LilacTrait::booted as private handleCaching;
        }

        protected $fillable = [
            'title',
            'description',
            'price',
            'quantity'
        ];

        protected static function booted() {
            self::handleCaching();
        }

        public function categories(): BelongsToMany {
            return $this->belongsToMany( Category::class );
        }

        public function sets(): BelongsToMany {
            return $this->belongsToMany( Set::class );
        }
    }
