<?php


namespace Snow\Payments\Traits;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasFeatures
{
    /**
     * Get feature by the given tag.
     *
     * @param string $featureTag
     * @return Model|HasMany|object|null
     */
    public function getFeatureByTag(string $featureTag)
    {
        return $this->features()->where('tag', $featureTag)->first();
    }
}
