<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class CareersController extends Controller
{
    public function index()
    {
        $title = 'Trang tuyển dụng của Travela';
        return view('clients.careers', compact('title'));
    }

    public function submitApplication(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:15',
                'position' => 'required|string|max:255',
                'message' => 'nullable|string',
                'cv' => 'required|mimes:jpg,jpeg,png,pdf|max:2048', // Chỉ chấp nhận file ảnh hoặc PDF, tối đa 2MB
            ]);

            // Lưu file CV
            $cvPath = null;
            if ($request->hasFile('cv')) {
                $cvPath = $request->file('cv')->store('cvs', 'public'); // Lưu file vào thư mục 'storage/app/public/cvs'
            }

            // Lưu thông tin vào database
            $application = JobApplication::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'position' => $request->position,
                'message' => $request->message,
                'cv_path' => $cvPath, // Lưu đường dẫn file CV
            ]);

            // Gửi email đến admin
            Mail::send('admin.emails.job_application', ['application' => $application], function ($message) use ($application) {
                $message->to('minhhoangse6@gmail.com')
                    ->subject('Ứng tuyển mới từ Travela');
            });

            Log::info('Ứng tuyển thành công', ['application' => $application]);

            return redirect()->back()->with('success', 'Ứng tuyển của bạn đã được gửi thành công!');
        } catch (\Exception $e) {
            // Ghi log lỗi
            Log::error('Lỗi khi gửi ứng tuyển', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi gửi ứng tuyển. Vui lòng thử lại sau.');
        }
    }
}