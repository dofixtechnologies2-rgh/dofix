<?php

namespace Modules\Notification\Services;

use Modules\Notification\Notifications\SystemNotification;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
// use App\Models\User;
use Modules\UserManagement\Entities\User;

class NotificationService
{
    /**
     * Send a notification to a user or collection of users.
     *
     * @param  mixed $users  Single User model or Collection of User models
     * @param  string $message  Notification message
     * @param  array $data  Additional data to store in notifications table
     * @return void
     */
    public function send($users, string $message, array $data = []): void
    {
        if (!$users) {
            Log::warning('NotificationService: No user provided', [
                'message' => $message,
                'data' => $data,
            ]);
            return;
        }

        // Handle collection of users
         $this->notifyUser($users, $message, $data);
        // if ($users instanceof Collection) {
        //     foreach ($users as $user) {
        //         $this->notifyUser($user, $message, $data);
        //     }
        // } else {
        //     $this->notifyUser($users, $message, $data);
        // }
    }

    /**
     * Send notification to a single user safely
     */
    protected function notifyUser($user, string $message, array $data = []): void
    {
        if (!$user) {
            Log::warning('NotificationService: Null user, notification not sent', [
                'message' => $message,
                'data' => $data,
            ]);
            return;
        }

        try {
            $getUser = User::where('id', $user)->first();
            $getUser->notify(new SystemNotification($message, $data));
            Log::info('Notification sent successfully', [
                'user_id' => $user,
                'message' => $message,
                'data' => $data,
            ]);
        } catch (\Throwable $e) {
            Log::error('NotificationService: Failed to send notification', [
                'user_id' => $user ?? null,
                'message' => $message,
                'data' => $data,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
