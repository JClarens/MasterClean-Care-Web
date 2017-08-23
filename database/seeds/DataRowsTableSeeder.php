<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class DataRowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        // $postDataType = DataType::where('slug', 'posts')->firstOrFail();
        // $pageDataType = DataType::where('slug', 'pages')->firstOrFail();
        $userDataType = DataType::where('slug', 'users')->firstOrFail();
        // $categoryDataType = DataType::where('slug', 'categories')->firstOrFail();
        $menuDataType = DataType::where('slug', 'menus')->firstOrFail();
        $roleDataType = DataType::where('slug', 'roles')->firstOrFail();
        $additionalInfoDataType = DataType::where('slug', 'additional-infos')->firstOrFail();
        $jobDataType = DataType::where('slug', 'jobs')->firstOrFail();
        $taskListDataType = DataType::where('slug', 'task-lists')->firstOrFail();
        $languageDataType = DataType::where('slug', 'languages')->firstOrFail();
        $placeDataType = DataType::where('slug', 'places')->firstOrFail();
        $reportDataType = DataType::where('slug', 'reports')->firstOrFail();
        $critismDataType = DataType::where('slug', 'critisms')->firstOrFail();
        $emergencyCallDataType = DataType::where('slug', 'emergency-calls')->firstOrFail();
        $reviewOrderDataType = DataType::where('slug', 'review-orders')->firstOrFail();
        $walletTransactionDataType = DataType::where('slug', 'wallet-transactions')->firstOrFail();
        $walletDataType = DataType::where('slug', 'wallets')->firstOrFail();
        $workTimeDataType = DataType::where('slug', 'work-times')->firstOrFail();

        $dataRow = $this->dataRow($additionalInfoDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($additionalInfoDataType, 'info');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Info',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }
        
        $dataRow = $this->dataRow($additionalInfoDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($additionalInfoDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($jobDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($jobDataType, 'job');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Job',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }
        
        $dataRow = $this->dataRow($jobDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($jobDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }
        
        $dataRow = $this->dataRow($taskListDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($taskListDataType, 'job_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Job',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($taskListDataType, 'task');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'string',
                'display_name' => 'Task',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($taskListDataType, 'point');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Point',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($taskListDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($taskListDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($languageDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($languageDataType, 'language');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Language',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }
        
        $dataRow = $this->dataRow($languageDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($languageDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($placeDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($placeDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }
        
        $dataRow = $this->dataRow($placeDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($placeDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }
        
        $dataRow = $this->dataRow($reportDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($reportDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'User',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"relationship":{"key":"id","label":"name","page_slug":"admin/users"}}',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($reportDataType, 'reporter_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Reporter',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"relationship":{"key":"id","label":"name","page_slug":"admin/users"}}',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($reportDataType, 'remark');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Remark',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($reportDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($reportDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($critismDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($critismDataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Email',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($critismDataType, 'content');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Content',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($critismDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($critismDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($emergencyCallDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($emergencyCallDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'User',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"relationship":{"key":"id","label":"name","page_slug":"admin/users"}}',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($emergencyCallDataType, 'init_time');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Init Time',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($emergencyCallDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"default":"0","options":{"0":"Inactive","1":"Active"}}',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($emergencyCallDataType, 'close_reason');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Close Reason',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($emergencyCallDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($emergencyCallDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($reviewOrderDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($reviewOrderDataType, 'order_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Order',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '{"relationship":{"key":"id"}}',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($reviewOrderDataType, 'rate');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'radion_button',
                'display_name' => 'Rate',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($reviewOrderDataType, 'remark');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Remark',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }
        
        $dataRow = $this->dataRow($reviewOrderDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($reviewOrderDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($walletTransactionDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($walletTransactionDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'User',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"relationship":{"key":"id","label":"name","page_slug":"admin/users"}}',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($walletTransactionDataType, 'amount');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Amount',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($walletTransactionDataType, 'trc_type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Transaction Type',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"default":"0","options":{"0":"Debet","1":"Credit"}}',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($walletTransactionDataType, 'trc_time');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Transaction Time',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($walletTransactionDataType, 'trc_img');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Transaction Image',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($walletTransactionDataType, 'acc_no');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Account Number',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($walletTransactionDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '{"default":"0","options":{"0":"Pending","1":"Success","2":"Reject"}}',
                'order'        => 8,
            ])->save();
        }
        
        $dataRow = $this->dataRow($walletTransactionDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($walletTransactionDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($walletDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($walletDataType, 'amt');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Amount',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($walletDataType, 'price');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Price',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($walletDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($walletDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($workTimeDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($workTimeDataType, 'work_time');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Work Time',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }
        
        $dataRow = $this->dataRow($workTimeDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($workTimeDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }
//         $dataRow = $this->dataRow($postDataType, 'id');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'number',
//                 'display_name' => 'ID',
//                 'required'     => 1,
//                 'browse'       => 0,
//                 'read'         => 0,
//                 'edit'         => 0,
//                 'add'          => 0,
//                 'delete'       => 0,
//                 'details'      => '',
//                 'order'        => 1,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'author_id');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'text',
//                 'display_name' => 'Author',
//                 'required'     => 1,
//                 'browse'       => 0,
//                 'read'         => 1,
//                 'edit'         => 1,
//                 'add'          => 0,
//                 'delete'       => 1,
//                 'details'      => '',
//                 'order'        => 2,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'category_id');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'text',
//                 'display_name' => 'Category',
//                 'required'     => 1,
//                 'browse'       => 0,
//                 'read'         => 1,
//                 'edit'         => 1,
//                 'add'          => 1,
//                 'delete'       => 0,
//                 'details'      => '',
//                 'order'        => 3,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'title');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'text',
//                 'display_name' => 'Title',
//                 'required'     => 1,
//                 'browse'       => 1,
//                 'read'         => 1,
//                 'edit'         => 1,
//                 'add'          => 1,
//                 'delete'       => 1,
//                 'details'      => '',
//                 'order'        => 4,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'excerpt');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'text_area',
//                 'display_name' => 'excerpt',
//                 'required'     => 1,
//                 'browse'       => 0,
//                 'read'         => 1,
//                 'edit'         => 1,
//                 'add'          => 1,
//                 'delete'       => 1,
//                 'details'      => '',
//                 'order'        => 5,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'body');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'rich_text_box',
//                 'display_name' => 'Body',
//                 'required'     => 1,
//                 'browse'       => 0,
//                 'read'         => 1,
//                 'edit'         => 1,
//                 'add'          => 1,
//                 'delete'       => 1,
//                 'details'      => '',
//                 'order'        => 6,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'image');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'image',
//                 'display_name' => 'Post Image',
//                 'required'     => 0,
//                 'browse'       => 1,
//                 'read'         => 1,
//                 'edit'         => 1,
//                 'add'          => 1,
//                 'delete'       => 1,
//                 'details'      => '
// {
//     "resize": {
//         "width": "1000",
//         "height": "null"
//     },
//     "quality": "70%",
//     "upsize": true,
//     "thumbnails": [
//         {
//             "name": "medium",
//             "scale": "50%"
//         },
//         {
//             "name": "small",
//             "scale": "25%"
//         },
//         {
//             "name": "cropped",
//             "crop": {
//                 "width": "300",
//                 "height": "250"
//             }
//         }
//     ]
// }',
//                 'order'        => 7,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'slug');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'text',
//                 'display_name' => 'slug',
//                 'required'     => 1,
//                 'browse'       => 0,
//                 'read'         => 1,
//                 'edit'         => 1,
//                 'add'          => 1,
//                 'delete'       => 1,
//                 'details'      => '
// {
//     "slugify": {
//         "origin": "title",
//         "forceUpdate": true
//     }
// }',
//                 'order'        => 8,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'meta_description');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'text_area',
//                 'display_name' => 'meta_description',
//                 'required'     => 1,
//                 'browse'       => 0,
//                 'read'         => 1,
//                 'edit'         => 1,
//                 'add'          => 1,
//                 'delete'       => 1,
//                 'details'      => '',
//                 'order'        => 9,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'meta_keywords');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'text_area',
//                 'display_name' => 'meta_keywords',
//                 'required'     => 1,
//                 'browse'       => 0,
//                 'read'         => 1,
//                 'edit'         => 1,
//                 'add'          => 1,
//                 'delete'       => 1,
//                 'details'      => '',
//                 'order'        => 10,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'status');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'select_dropdown',
//                 'display_name' => 'status',
//                 'required'     => 1,
//                 'browse'       => 1,
//                 'read'         => 1,
//                 'edit'         => 1,
//                 'add'          => 1,
//                 'delete'       => 1,
//                 'details'      => '
// {
//     "default": "DRAFT",
//     "options": {
//         "PUBLISHED": "published",
//         "DRAFT": "draft",
//         "PENDING": "pending"
//     }
// }',
//                 'order'        => 11,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'created_at');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'timestamp',
//                 'display_name' => 'created_at',
//                 'required'     => 0,
//                 'browse'       => 1,
//                 'read'         => 1,
//                 'edit'         => 0,
//                 'add'          => 0,
//                 'delete'       => 0,
//                 'details'      => '',
//                 'order'        => 12,
//             ])->save();
//         }

//         $dataRow = $this->dataRow($postDataType, 'updated_at');
//         if (!$dataRow->exists) {
//             $dataRow->fill([
//                 'type'         => 'timestamp',
//                 'display_name' => 'updated_at',
//                 'required'     => 0,
//                 'browse'       => 0,
//                 'read'         => 0,
//                 'edit'         => 0,
//                 'add'          => 0,
//                 'delete'       => 0,
//                 'details'      => '',
//                 'order'        => 13,
//             ])->save();
//         }

        // $dataRow = $this->dataRow($pageDataType, 'id');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'number',
        //         'display_name' => 'id',
        //         'required'     => 1,
        //         'browse'       => 0,
        //         'read'         => 0,
        //         'edit'         => 0,
        //         'add'          => 0,
        //         'delete'       => 0,
        //         'details'      => '',
        //         'order'        => 1,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'author_id');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'author_id',
        //         'required'     => 1,
        //         'browse'       => 0,
        //         'read'         => 0,
        //         'edit'         => 0,
        //         'add'          => 0,
        //         'delete'       => 0,
        //         'details'      => '',
        //         'order'        => 2,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'title');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'title',
        //         'required'     => 1,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => '',
        //         'order'        => 3,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'excerpt');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text_area',
        //         'display_name' => 'excerpt',
        //         'required'     => 1,
        //         'browse'       => 0,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => '',
        //         'order'        => 4,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'body');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'rich_text_box',
        //         'display_name' => 'body',
        //         'required'     => 1,
        //         'browse'       => 0,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => '',
        //         'order'        => 5,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'slug');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'slug',
        //         'required'     => 1,
        //         'browse'       => 0,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => json_encode([
        //             'slugify' => [
        //                 'origin' => 'title',
        //             ],
        //         ]),
        //         'order'        => 6,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'meta_description');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'meta_description',
        //         'required'     => 1,
        //         'browse'       => 0,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => '',
        //         'order'        => 7,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'meta_keywords');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'meta_keywords',
        //         'required'     => 1,
        //         'browse'       => 0,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => '',
        //         'order'        => 8,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'status');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'select_dropdown',
        //         'display_name' => 'status',
        //         'required'     => 1,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => json_encode([
        //             'default' => 'INACTIVE',
        //             'options' => [
        //                 'INACTIVE' => 'INACTIVE',
        //                 'ACTIVE'   => 'ACTIVE',
        //             ],
        //         ]),
        //         'order'        => 9,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'created_at');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'timestamp',
        //         'display_name' => 'created_at',
        //         'required'     => 1,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 0,
        //         'add'          => 0,
        //         'delete'       => 0,
        //         'details'      => '',
        //         'order'        => 10,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'updated_at');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'timestamp',
        //         'display_name' => 'updated_at',
        //         'required'     => 1,
        //         'browse'       => 0,
        //         'read'         => 0,
        //         'edit'         => 0,
        //         'add'          => 0,
        //         'delete'       => 0,
        //         'details'      => '',
        //         'order'        => 11,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($pageDataType, 'image');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'image',
        //         'display_name' => 'image',
        //         'required'     => 0,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => '',
        //         'order'        => 12,
        //     ])->save();
        // }

        $dataRow = $this->dataRow($userDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'email',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'password');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'password',
                'display_name' => 'password',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '{"default":"0","options":{"0":"Inactive","1":"Active"}}',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'remember_token');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'remember_token',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'avatar');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'avatar',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        // $dataRow = $this->dataRow($categoryDataType, 'id');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'number',
        //         'display_name' => 'id',
        //         'required'     => 1,
        //         'browse'       => 0,
        //         'read'         => 0,
        //         'edit'         => 0,
        //         'add'          => 0,
        //         'delete'       => 0,
        //         'details'      => '',
        //         'order'        => 1,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($categoryDataType, 'parent_id');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'select_dropdown',
        //         'display_name' => 'parent_id',
        //         'required'     => 0,
        //         'browse'       => 0,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => json_encode([
        //             'default'  => '',
        //             'null'     => '',
        //             'options'  => [
        //                 '' => '-- None --',
        //             ],
        //             'relationship' => [
        //                 'key'   => 'id',
        //                 'label' => 'name',
        //             ],
        //         ]),
        //         'order'        => 2,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($categoryDataType, 'order');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'order',
        //         'required'     => 1,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => json_encode([
        //             'default' => 1,
        //         ]),
        //         'order'        => 3,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($categoryDataType, 'name');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'name',
        //         'required'     => 1,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => '',
        //         'order'        => 4,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($categoryDataType, 'slug');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'slug',
        //         'required'     => 1,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => '',
        //         'order'        => 5,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($categoryDataType, 'created_at');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'timestamp',
        //         'display_name' => 'created_at',
        //         'required'     => 0,
        //         'browse'       => 0,
        //         'read'         => 1,
        //         'edit'         => 0,
        //         'add'          => 0,
        //         'delete'       => 0,
        //         'details'      => '',
        //         'order'        => 6,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($categoryDataType, 'updated_at');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'timestamp',
        //         'display_name' => 'updated_at',
        //         'required'     => 0,
        //         'browse'       => 0,
        //         'read'         => 0,
        //         'edit'         => 0,
        //         'add'          => 0,
        //         'delete'       => 0,
        //         'details'      => '',
        //         'order'        => 7,
        //     ])->save();
        // }

        $dataRow = $this->dataRow($roleDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'display_name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Display Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        // $dataRow = $this->dataRow($postDataType, 'seo_title');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'text',
        //         'display_name' => 'seo_title',
        //         'required'     => 0,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => '',
        //         'order'        => 14,
        //     ])->save();
        // }

        // $dataRow = $this->dataRow($postDataType, 'featured');
        // if (!$dataRow->exists) {
        //     $dataRow->fill([
        //         'type'         => 'checkbox',
        //         'display_name' => 'featured',
        //         'required'     => 1,
        //         'browse'       => 1,
        //         'read'         => 1,
        //         'edit'         => 1,
        //         'add'          => 1,
        //         'delete'       => 1,
        //         'details'      => '',
        //         'order'        => 15,
        //     ])->save();
        // }

        $dataRow = $this->dataRow($userDataType, 'role_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'role_id',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 10,
            ])->save();
        }
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
                'data_type_id' => $type->id,
                'field'        => $field,
            ]);
    }
}
