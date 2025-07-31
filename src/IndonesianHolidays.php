<?php

namespace peace2643\IndonesianHolidays;

class IndonesianHolidays
{
    // Indonesian National Holidays 2025
    private $holidays = [
        '2025-01-01' => 'Tahun Baru Masehi',
        '2025-01-29' => 'Tahun Baru Imlek',
        '2025-03-14' => 'Hari Suci Nyepi',
        '2025-03-29' => 'Wafat Isa Al Masih',
        '2025-03-31' => 'Isra Mikraj',
        '2025-04-01' => 'Hari Raya Idul Fitri',
        '2025-04-02' => 'Hari Raya Idul Fitri (Hari Kedua)',
        '2025-05-01' => 'Hari Buruh Internasional',
        '2025-05-12' => 'Hari Raya Waisak',
        '2025-05-29' => 'Kenaikan Isa Al Masih',
        '2025-06-01' => 'Hari Lahir Pancasila',
        '2025-06-07' => 'Hari Raya Idul Adha',
        '2025-06-28' => 'Tahun Baru Hijriyah',
        '2025-08-17' => 'Hari Kemerdekaan Indonesia',
        '2025-09-05' => 'Maulid Nabi Muhammad SAW',
        '2025-12-25' => 'Hari Raya Natal'
    ];

    /**
     * Check if today is a holiday
     */
    public function isToday()
    {
        $today = date('Y-m-d');
        return isset($this->holidays[$today]) ? $this->holidays[$today] : false;
    }

    /**
     * Check if yesterday was a holiday
     */
    public function isYesterday()
    {
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        return isset($this->holidays[$yesterday]) ? $this->holidays[$yesterday] : false;
    }

    /**
     * Check if tomorrow is a holiday
     */
    public function isTomorrow()
    {
        $tomorrow = date('Y-m-d', strtotime('+1 day'));
        return isset($this->holidays[$tomorrow]) ? $this->holidays[$tomorrow] : false;
    }

    /**
     * Check if a specific date is a holiday
     */
    public function isHoliday($date)
    {
        return isset($this->holidays[$date]) ? $this->holidays[$date] : false;
    }

    /**
     * Get all holidays for this month
     */
    public function isThisMonth()
    {
        $currentMonth = date('Y-m');
        $monthlyHolidays = [];
        
        foreach ($this->holidays as $date => $name) {
            if (strpos($date, $currentMonth) === 0) {
                $monthlyHolidays[$date] = $name;
            }
        }
        
        return $monthlyHolidays;
    }

    /**
     * Get all holidays for this year
     */
    public function isThisYear()
    {
        $currentYear = date('Y');
        $yearlyHolidays = [];
        
        foreach ($this->holidays as $date => $name) {
            if (strpos($date, $currentYear) === 0) {
                $yearlyHolidays[$date] = $name;
            }
        }
        
        return $yearlyHolidays;
    }

    /**
     * Get all holidays
     */
    public function getAllHolidays()
    {
        return $this->holidays;
    }

    /**
     * Get next upcoming holiday
     */
    public function getNext()
    {
        $today = date('Y-m-d');
        
        foreach ($this->holidays as $date => $name) {
            if ($date > $today) {
                return [
                    'date' => $date,
                    'name' => $name,
                    'days_until' => (strtotime($date) - strtotime($today)) / (60 * 60 * 24)
                ];
            }
        }
        
        return null;
    }
}
