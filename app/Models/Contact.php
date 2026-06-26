<?php

namespace App\Models;

use Database\Factories\ContactFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

#[Fillable([
    'company_id',
    'name',
    'job_title',
    'linkedin_url',
    'email',
    'notes',
])]
class Contact extends Model
{
    /** @use HasFactory<ContactFactory> */
    use HasFactory;

    /**
     * Contact's company.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Tasks assigned to this contact.
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Outreach attempts for this contact.
     */
    public function outreachAttempts(): HasMany
    {
        return $this->hasMany(OutreachAttempt::class);
    }

    /**
     * Display name with job title.
     */
    public function displayName(): string
    {
        return $this->job_title
            ? "{$this->name} ({$this->job_title})"
            : $this->name;
    }

    /**
     * Activities related to this contact.
     */
    public function activities(): MorphMany
    {
        return $this->morphMany(Activity::class, 'subject');
    }
}
