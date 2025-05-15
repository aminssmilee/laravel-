<?php
namespace App\Filament\Resources\PenggunaResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Pengguna;

/**
 * @property Pengguna $resource
 */
class PenggunaTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
