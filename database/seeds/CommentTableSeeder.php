<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['body' => 'ร้านใหม่มีสไตล์ย่านทองหล่อ เพิ่งเปิดครอบหนึ่งเดือน ลูกค้าญี่ปุ่น25% เกาหลี15% คนไทย60% คนจีนคงมีแต่เราเองมั้ง hahahahha～ออกจากThonglor Travellers Hostel & Cafeก็มาร้านนี้ ขยันมากนะเรา😂😂 สั่งเป็น green tea latte ไม่มีน้ำตาลอีกละ😂แต่ก็โอเคละ (กินMahchaที่เพื่อนตีบ่อย เลยรู้ฝีมือการตีชาของพนักงานร้านนี้ใช้ได้) สาวๆขึ้นไปดูเสื้อชั้น 2 ก็ดีนะอาจเจอตัวที่ชอบ เมนูอื่นขอมาลองวันหลังแล้วกันนะอยู่ไม่ไกลเหมือนกัน ',
            'img_url' => '/images/img-comment.jpg',
            'user_id' => 1,
            'post_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
