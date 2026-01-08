<?php
use Modules\Notification\Http\Controllers\NotificationController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/notifications/send', [NotificationController::class, 'send']);
    Route::get('/notifications', [NotificationController::class, 'index']);
    Route::post('/notifications/{id}/read', [NotificationController::class, 'markAsRead']);
});
