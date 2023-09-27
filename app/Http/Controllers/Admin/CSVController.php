<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use App\Models\Doctor;

class CSVController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::paginate(10);
        return view('admin.all_imports', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.import_csv');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the uploaded file
            $validator = Validator::make($request->all(), [
                'csv_file' => 'required|mimes:csv,txt',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Handle the CSV file upload and data insertion logic
            $file = $request->file('csv_file');

            // Generate a unique file name
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Store the file in the storage/app/csv directory
            $filePath = $file->storeAs('csv', $fileName);

            $csvData = []; // Initialize an array to store CSV data

            if ($file->isValid()) {
                $handle = fopen(storage_path('app/' . $filePath), 'r');

                if ($handle !== false) {
                    $skipFirstRow = true; // Flag to skip the first row

                    // Loop through each line in the CSV file
                    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                        if ($skipFirstRow) {
                            $skipFirstRow = false;
                            continue;
                        }

                        // Convert each data item to UTF-8
                        $utf8Data = array_map('utf8_encode', $data);
                        $service_name = $data[1];

                        // Check if the service_name already exists
                        $services = Service::firstOrCreate(['service_name' => $service_name]);
                        $service = Service::where('service_name', $data[1])->first();
                        $doctor_exist = Doctor::where('company_name', $data[8])->first();

                        $rawDescription = $data[5];

                        // Check if the description value is empty or not
                        if ($rawDescription !== '') {
                            // Apply UTF-8 encoding to the description data
                            $description = utf8_encode($rawDescription);
                        } else {
                            // If it's empty, set it to null
                            $description = null;
                        }

                        $rawRating = $data[22];

                        // Check if the rating value is empty or not numeric
                        if ($rawRating !== '') {
                            $rating = (float) $rawRating;

                            if (!is_nan($rating)) {
                                $rating = round($rating, 2);
                            } else {
                                $rating = 0.00;
                            }
                        } else {
                            $rating = 0.00;
                        }

                        $rawRatingCount = $data[21];

                        if ($rawRatingCount !== '') {
                            // If it's not empty, attempt to convert it to an integer
                            $ratingCount = (int) $rawRatingCount;

                            // Check if the conversion was successful and it's a valid integer value
                            if ($ratingCount !== 0) {
                                // If it's a valid integer value, use it as is
                            } else {
                                $ratingCount = 0;
                            }
                        } else {
                            $ratingCount = 0;
                        }

                        try {
                            Doctor::firstOrCreate([
                                'service_id' => $service->id,
                                'company_name' => $data[8],
                                'specialization' => $data[3],
                                'first_name' => $data[8],
                                'last_name' => $data[8],
                                'description' => $description,
                                'type' => $data[3],
                                'main_category' => $data[9],
                                'secondary_category' => $data[2],
                                'image' => $data[0],
                                'age' => 25,
                                'sex' => 'null',
                                'phone' => $data[11],
                                'email_1' => $data[12],
                                'email_2' => $data[13],
                                'email_3' => $data[14],
                                'rating' => $rating,
                                'rating_count' => $ratingCount,
                                'experience' => $data[5],
                                'education' => $data[5],
                                'keyword' => $data[6],
                                'website' => $data[10],
                                'location' => $data[17],
                                'latitude' => $data[15],
                                'longitude' => $data[16],
                                'locality' => $data[18],
                                'city' => $data[18],
                                'state' => $data[19],
                                'zip_code' => $data[20],
                                'administrative_area_level_1' => $data[19],
                                'country' => 'india',
                                'map_url' => $data[23],
                                'work_timings' => "null",
                                'fee' => 0.00
                            ]);
                        } catch (\Exception $e) {
                            unlink(storage_path('app/' . $filePath));
                            Log::error('Error while inserting data: ' . $e->getMessage());
                        }

                        $csvData[] = $utf8Data;
                    }

                    fclose($handle);
                }
                unlink(storage_path('app/' . $filePath)); // Unlink (delete) the CSV file
            }
        } catch (\Exception $e) {
            unlink(storage_path('app/' . $filePath));
            Log::error('An error occurred during CSV import: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'CSV Imported Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
