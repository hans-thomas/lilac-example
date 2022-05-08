<?php

    namespace App\Models\Shop;

    use Hans\Lilac\Traits\LilacTrait;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;

    /**
 * @mixin IdeHelperSet
 */
    class Set extends Model {
        use HasFactory;
        use LilacTrait, LilacTrait {
            LilacTrait::booted as private handleCaching;
        }

        protected $fillable = [
            'name',
            'description',
        ];

        protected static function booted() {
            self::handleCaching();
        }

        public function products(): BelongsToMany {
            return $this->belongsToMany( Product::class );
        }
    }
