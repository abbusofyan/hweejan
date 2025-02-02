<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VendorAttachment extends Model
{
    use HasFactory;

    protected $table = 'vendor_attachments';

    protected $fillable = [
        'vendor_id',
        'name',
        'file_url',
        'remarks',
    ];

    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }
}
