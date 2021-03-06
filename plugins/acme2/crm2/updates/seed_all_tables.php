<?php namespace Acme2\Crm2\Updates;

use Acme2\Crm2\Models\Status;
use Acme2\Crm2\Models\Note;
use Acme2\Crm2\Models\Opportunity;
use Acme2\Crm2\Models\Contact;
use Acme2\Crm2\Models\Offering;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
	public function run()
	{
		Status::create(['name' => 'First contact',     'probability' => '5%']);
		Status::create(['name' => 'Proposal made',     'probability' => '20%']);
		Status::create(['name' => 'Under review',      'probability' => '40%']);
		Status::create(['name' => 'Positive response', 'probability' => '60%']);
		Status::create(['name' => 'Verbal agreement',  'probability' => '90%']);
		Status::create(['name' => 'Closed (Won)',      'probability' => '100%']);
		Status::create(['name' => 'Closed (Lost)',     'probability' => '0%']);

		Offering::create(['name' => 'Web application', 'cost' => 300, 'price' => 600]);
		Offering::create(['name' => 'Broschure website', 'cost' => 50, 'price' => 100]);
		Offering::create(['name' => 'Mobile application', 'cost' => 60, 'price' => 120]);
		Offering::create(['name' => 'Logo design', 'cost' => 40, 'price' => 80]);
		Offering::create(['name' => 'Copywriting', 'cost' => 20, 'price' => 40]);

		Contact::create(['first_name' => 'Zhafri', 'last_name' => 'Shafiq', 'position' => 'Developer', 'company' => "KFC"]);
		Contact::create(['first_name' => 'Abu', 'last_name' => 'Bakar', 'position' => 'Analyst', 'company' => "McDonalds"]);
	}
}