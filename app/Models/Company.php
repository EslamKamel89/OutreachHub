<?php

namespace App\Models;

use App\Enums\Company\OpportunityStage;
use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'city_id',
    'industry_id',
    'opportunity_stage',
    'name',
    'website',
    'linkedin_url',
    'careers_url',
    'employee_count',
    'description',
    'source',
    'notes',
    'is_hiring',
])]
class Company extends Model
{
    /** @use HasFactory<CompanyFactory> */
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'opportunity_stage' => OpportunityStage::class,
            'employee_count' => 'integer',
            'is_hiring' => 'boolean',
        ];
    }

    /**
     * City where the company is located.
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Industry the company belongs to.
     */
    public function industry(): BelongsTo
    {
        return $this->belongsTo(Industry::class);
    }

    /**
     * Company contacts.
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

    /**
     * Company job opportunities.
     */
    public function jobOpportunities(): HasMany
    {
        return $this->hasMany(JobOpportunity::class);
    }

    /**
     * Company activities.
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }

    /**
     * Company tags.
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
