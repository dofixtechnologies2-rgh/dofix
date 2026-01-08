<?php

namespace Modules\Notification\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Notification\Services\NotificationService;
use Modules\Notification\Http\Requests\SendNotificationRequest;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function send(
        SendNotificationRequest $request,
        NotificationService $notificationService
    ) {
        $users = User::whereIn('id', $request->user_ids)->get();
         Log::error('NotificationService: Failed to send notification', [
                "users" => $users
            ]);

        $notificationService->send(
            $users,
            $request->message,
            $request->data ?? []
        );

        return response()->json([
            'success' => true,
            'message' => 'Notification sent successfully'
        ]);
    }

    public function index()
    {
        return response()->json(
            auth()->user()->notifications
        );
    }

    public function markAsRead(string $id)
    {
        auth()->user()
            ->notifications()
            ->where('id', $id)
            ->update(['read_at' => now()]);

        return response()->json([
            'success' => true
        ]);
    }
}
