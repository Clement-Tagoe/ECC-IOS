<?php

namespace Database\Seeders;

use App\Models\ValidCase;
use Illuminate\Database\Seeder;

class ValidCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ValidCase::create([
            'case_id' => 'VSC1000001',
            'reporting_time' => '08:15:00',
            'reporting_date' => '2025-01-05',
            'agency_id' => 1,
            'region' => 'Greater Accra',
            'location' => 'Accra',
            'HOD' => 'Pending Review',
            'contact_name' => 'Kwame Mensah',
            'contact_number' => '0241111111',
            'description' => 'Reported theft at Makola market.',
            'case_nature' => 'Theft',
            'feedback_comment' => 'Suspect apprehended.',
            'created_by' => 'Admin User'
        ]);

        ValidCase::create([
            'case_id' => 'VSC1000002',
            'reporting_time' => '09:30:00',
            'reporting_date' => '2025-01-05',
            'agency_id' => 2,
            'region' => 'Ashanti',
            'location' => 'Kumasi',
            'HOD' => 'Reviewed',
            'contact_name' => 'Ama Boateng',
            'contact_number' => '0242222222',
            'description' => 'Fire outbreak in a residential building.',
            'case_nature' => 'Fire Outbreak',
            'feedback_comment' => 'Fire contained successfully.',
            'created_by' => 'System Admin'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000003',
            'reporting_time' => '11:45:00',
            'reporting_date' => '2025-01-05',
            'agency_id' => 3,
            'region' => 'Central',
            'location' => 'Cape Coast',
            'HOD' => 'Pending Review',
            'contact_name' => 'Joseph Annan',
            'contact_number' => '0243333333',
            'description' => 'Patient needs urgent transfer to teaching hospital.',
            'case_nature' => 'Patient Transfer',
            'feedback_comment' => 'Patient stabilized.',
            'created_by' => 'Nurse Admin'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000004',
            'reporting_time' => '13:20:00',
            'reporting_date' => '2025-01-05',
            'agency_id' => 4,
            'region' => 'Volta',
            'location' => 'Ho',
            'HOD' => 'Reviewed',
            'contact_name' => 'Kofi Agbo',
            'contact_number' => '0244444444',
            'description' => 'Flooding affecting multiple homes.',
            'case_nature' => 'Flood',
            'feedback_comment' => 'Relief items distributed.',
            'created_by' => 'Disaster Officer'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000005',
            'reporting_time' => '15:00:00',
            'reporting_date' => '2025-01-04',
            'agency_id' => 1,
            'region' => 'Western',
            'location' => 'Takoradi',
            'HOD' => 'Pending Review',
            'contact_name' => 'Yaw Gyan',
            'contact_number' => '0245555555',
            'description' => 'Armed robbery at fuel station.',
            'case_nature' => 'Robbery',
            'feedback_comment' => 'Investigation ongoing.',
            'created_by' => 'Police Admin'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000050',
            'reporting_time' => '22:10:00',
            'reporting_date' => '2025-01-04',
            'agency_id' => 4,
            'region' => 'Savannah',
            'location' => 'Damongo',
            'HOD' => 'Reviewed',
            'contact_name' => 'Fuseini Haruna',
            'contact_number' => '0249999999',
            'description' => 'Earth tremor reported with minor structural damage.',
            'case_nature' => 'Earth Tremor',
            'feedback_comment' => 'Assessment ongoing.',
            'created_by' => 'NADMO Officer'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000001', 
            'reporting_time' => '08:15:22', 
            'reporting_date' => '2025-01-04', 
            'agency_id' => 1, 'region' => 'Greater Accra', 
            'location' => 'Accra Central',
            'HOD' => 'Reviewed', 
            'contact_name' => 'Ama Serwaa', 
            'contact_number' => '0541234567', 
            'description' => 'Armed robbery in progress at Adabraka market.', 
            'case_nature' => 'Robbery', 'feedback_comment' => 
            'Suspects arrested, victims receiving medical attention', 
            'created_by' => 'Kwame Asare'
        ]);

        ValidCase::create([
            'case_id' => 'VSC1000002', 
            'reporting_time' => '14:42:10', 
            'reporting_date' => '2025-01-04', 
            'agency_id' => 3, 
            'region' => 'Ashanti', 
            'location' => 'Kumasi Adum', 
            'HOD' => 'Reviewed',
            'contact_name' => 'Joseph Osei', 
            'contact_number' => '0245678901', 
            'description' => 'Serious road traffic accident involving two trotros.', 
            'case_nature' => 'Accident', 
            'feedback_comment' => '6 victims transported to KATH', 
            'created_by' => 'Abena Mensah'
        ]);

        ValidCase::create([
            'case_id' => 'VSC1000003', 
            'reporting_time' => '03:18:45', 
            'reporting_date' => '2025-01-04', 
            'agency_id' => 2, 
            'region' => 'Central', 
            'location' => 'Cape Coast',
            'HOD' => 'Reviewed', 
            'contact_name' => 'Kofi Mensah', 
            'contact_number' => '0278901234', 
            'description' => 'Market fire spreading rapidly near castle.', 
            'case_nature' => 'Fire', 
            'feedback_comment' => 'Fire contained, no casualties reported', 
            'created_by' => 'Efua Boateng'
        ]);

        ValidCase::create([
            'case_id' => 'VSC1000004', 
            'reporting_time' => '11:05:33', 
            'reporting_date' => '2025-01-03', 
            'agency_id' => 4, 
            'region' => 'Northern', 
            'location' => 'Tamale', 
            'HOD' => 'Pending Review',
            'contact_name' => 'Fuseini Yakubu', 
            'contact_number' => '0554321987', 
            'description' => 'Heavy flooding in low-lying areas after overnight rain.', 
            'case_nature' => 'Flood', 
            'feedback_comment' => '30 households evacuated to safety', 
            'created_by' => 'Zainab Ibrahim'
        ]);

        ValidCase::create([
            'case_id' => 'VSC1000005', 
            'reporting_time' => '09:22:17', 
            'reporting_date' => '2025-01-03', 
            'agency_id' => 3, 
            'region' => 'Eastern', 
            'location' => 'Koforidua', 
            'HOD' => 'Pending Review',
            'contact_name' => 'Michael Appiah', 
            'contact_number' => '0243887612', 
            'description' => 'Doctor requesting ambulance for critical patient transfer.', 
            'case_nature' => 'Patient Transfer', 
            'feedback_comment' => 'Patient transferred to Sonotech Ridge Hospital', 
            'created_by' => 'Patricia Turkson'
        ]);

        ValidCase::create([
            'case_id' => 'VSC1000006', 
            'reporting_time' => '22:47:09', 
            'reporting_date' => '2025-01-03', 
            'agency_id' => 1, 
            'region' => 'Western', 
            'location' => 'Takoradi Market Circle',
            'HOD' => 'Reviewed', 
            'contact_name' => 'Emmanuel Mensah', 
            'contact_number' => '0267123456', 
            'description' => 'Snatching of mobile phones and bags by two men on motorbike.', 
            'case_nature' => 'Theft', 
            'feedback_comment' => 'Investigation ongoing', 
            'created_by' => 'Sarah Ofori'
        ]);

        ValidCase::create([
            'case_id' => 'VSC1000007', 
            'reporting_time' => '16:30:55', 
            'reporting_date' => '2025-01-03', 
            'agency_id' => 2, 
            'region' => 'Volta', 
            'location' => 'Ho', 
            'HOD' => 'Reviewed',
            'contact_name' => 'Ablavi Dzakpasu', 
            'contact_number' => '0209876543', 
            'description' => 'Building collapse at construction site.', 
            'case_nature' => 'Collapsed Building', 
            'feedback_comment' => '3 injured rescued, search for others ongoing', 
            'created_by' => 'Yaw Agbesi'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000008', 
            'reporting_time' => '06:12:40', 
            'reporting_date' => '2025-01-03', 
            'agency_id' => 4, 
            'region' => 'Upper East', 
            'location' => 'Bolgatanga',
            'HOD' => 'Pending Review', 
            'contact_name' => 'Akolgo Atule', 
            'contact_number' => '0538765432', 
            'description' => 'Earth tremor felt across several communities.', 
            'case_nature' => 'Earth Tremor', 
            'feedback_comment' => 'No major damage reported', 
            'created_by' => 'Asibi Apaabey'
        ]);

        ValidCase::create([
            'case_id' => 'VSC1000009', 
            'reporting_time' => '19:08:21', 
            'reporting_date' => '2025-01-03', 
            'agency_id' => 3, 
            'region' => 'Western North', 
            'location' => 'Sefwi Wiawso',
            'HOD' => 'Pending Review', 
            'contact_name' => 'Comfort Amoah', 
            'contact_number' => '0572345678', 
            'description' => 'Pregnant woman in labour with complications.', 
            'case_nature' => 'Medical Valid', 
            'feedback_comment' => 'Mother and baby safe at hospital', 
            'created_by' => 'Daniel Koomson'
        ]);

        ValidCase::create([
            'case_id' => 'VSC1000010', 
            'reporting_time' => '13:55:00', 
            'reporting_date' => '2025-01-03', 
            'agency_id' => 1, 
            'region' => 'Ahafo', 
            'location' => 'Goaso', 
            'HOD' => 'Pending Review',
            'contact_name' => 'Kwabena Twum', 
            'contact_number' => '0247654321', 
            'description' => 'Domestic violence with serious injuries.', 
            'case_nature' => 'Assault', 
            'feedback_comment' => 'Victim receiving treatment, suspect in custody', 
            'created_by' => 'Mercy Agyei'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000011',
            'reporting_time' => '04:22:33', 
            'reporting_date' => '2025-01-03', 
            'agency_id' => 2, 
            'region' => 'Bono', 
            'location' => 'Sunyani', 
            'HOD' => 'Reviewed',
            'contact_name' => 'Akosua Poku', 
            'contact_number' => '0276543210', 
            'description' => 'Gas explosion at filling station.', 
            'case_nature' => 'Explosion', 
            'feedback_comment' => 'Fire extinguished, 4 injured', 
            'created_by' => 'Kwadwo Boateng'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000012', 
            'reporting_time' => '10:40:19', 
            'reporting_date' => '2025-01-02', 
            'agency_id' => 4, 
            'region' => 'Savannah', 
            'HOD' => 'Reviewed',
            'location' => 'Damongo', 
            'contact_name' => 'Sulemana Issah', 
            'contact_number' => '0559876543', 
            'description' => 'Severe flooding affecting 5 communities.', 
            'case_nature' => 'Flood', 
            'feedback_comment' => 'Relief items distributed', 
            'created_by' => 'Fatima Mahama'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000013', 
            'reporting_time' => '21:17:44', 
            'reporting_date' => '2025-01-02', 
            'agency_id' => 1, 
            'region' => 'Oti', 
            'location' => 'Dambai',
            'HOD' => 'Pending Review', 
            'contact_name' => 'Adjoa Tetteh', 
            'contact_number' => '0265432109', 
            'description' => 'Armed robbery at fuel station.', 
            'case_nature' => 'Robbery', 
            'feedback_comment' => 'Cash and phones stolen', 
            'created_by' => 'Emmanuel Doe'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000014', 
            'reporting_time' => '07:33:12', 
            'reporting_date' => '2025-01-02', 
            'agency_id' => 3, 
            'region' => 'North East', 
            'location' => 'Nalerigu',
            'HOD' => 'Reviewed', 
            'contact_name' => 'Bismark Azure', 
            'contact_number' => '0248765432', 
            'description' => 'Child fell from tree, unconscious.', 
            'case_nature' => 'Accident', 
            'feedback_comment' => 'Child stabilized and admitted', 
            'created_by' => 'Ramatu Fuseini'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000015', 
            'reporting_time' => '18:09:56', 
            'reporting_date' => '2025-01-02', 
            'agency_id' => 2, 
            'region' => 'Upper West', 
            'location' => 'Wa', 
            'HOD' => 'Reviewed',  
            'contact_name' => 'Fuseini Dramani', 
            'contact_number' => '0203456789', 
            'description' => 'Residential building on fire.', 
            'case_nature' => 'Fire', 
            'feedback_comment' => 'Fire put out, family safe', 
            'created_by' => 'Hawa Salifu'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000016', 
            'reporting_time' => '12:25:47',
            'reporting_date' => '2025-01-02', 
            'agency_id' => 4, 
            'region' => 'Central', 
            'location' => 'Kasoa', 
            'HOD' => 'Pending Review',
            'contact_name' => 'Nana Yaw', 
            'contact_number' => '0543210987', 
            'description' => 'Flooding in several estates after heavy downpour.', 
            'case_nature' => 'Flood', 
            'feedback_comment' => 'Evacuation completed', 
            'created_by' => 'Grace Arthur'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000017', 
            'reporting_time' => '05:50:11', 
            'reporting_date' => '2025-01-02', 
            'agency_id' => 1, 
            'region' => 'Ashanti', 
            'location' => 'Kejetia', 
            'HOD' => 'Reviewed',
            'contact_name' => 'Yaa Pokuaa', 
            'contact_number' => '0278901234', 
            'description' => 'Pickpocketing incident at market.', 
            'case_nature' => 'Theft', 
            'feedback_comment' => 'Suspect identified on CCTV', 
            'created_by' => 'Kwaku Frimpong'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000018', 
            'reporting_time' => '15:14:29', 
            'reporting_date' => '2025-01-01', 
            'agency_id' => 3, 'region' => 'Eastern', 
            'location' => 'Nkawkaw', 
            'HOD' => 'Reviewed',
            'contact_name' => 'Esther Asante', 
            'contact_number' => '0241122334', 
            'description' => 'Request for ambulance - stroke patient.', 
            'case_nature' => 'Medical Valid', 
            'feedback_comment' => 'Patient transported to hospital', 
            'created_by' => 'Frank Osei'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000019', 
            'reporting_time' => '23:41:03', 
            'reporting_date' => '2025-01-01', 
            'agency_id' => 2, 
            'region' => 'Volta', 
            'location' => 'Aflao', 
            'HOD' => 'Pending Review',
            'contact_name' => 'Dzifa Agbenyega', 
            'contact_number' => '0267788990', 
            'description' => 'Bush fire approaching residential area.', 
            'case_nature' => 'Fire', 
            'feedback_comment' => 'Fire contained', 
            'created_by' => 'Kofi Agbenu'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000020', 
            'reporting_time' => '09:07:38', 
            'reporting_date' => '2025-01-01', 
            'agency_id' => 4, 
            'region' => 'Northern', 
            'location' => 'Yendi', 
            'HOD' => 'Pending Review',
            'contact_name' => 'Alhassan Mohammed', 
            'contact_number' => '0536677889', 
            'description' => 'Windstorm destroyed several structures.', 
            'case_nature' => 'Windstorm', 
            'feedback_comment' => 'Relief efforts started', 
            'created_by' => 'Aminata Issah'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000048', 
            'reporting_time' => '17:55:12', 
            'reporting_date' => '2025-01-01', 
            'agency_id' => 1, 
            'region' => 'Greater Accra', 
            'location' => 'Tema Community 1',
            'HOD' => 'Reviewed', 
            'contact_name' => 'Solomon Tetteh', 
            'contact_number' => '0245566778', 
            'description' => 'Carjacking at gunpoint.', 
            'case_nature' => 'Robbery', 
            'feedback_comment' => 'Vehicle recovered, suspects at large', 
            'created_by' => 'Linda Quaye'
            ]);

        ValidCase::create([
            'case_id' => 'VSC1000049', 
            'reporting_time' => '02:18:09', 
            'reporting_date' => '2025-01-01', 
            'agency_id' => 2, 
            'region' => 'Western', 
            'location' => 'Elubo', 
            'HOD' => 'Pending Review',
            'contact_name' => 'Esi Arhin', 
            'contact_number' => '0273344556', 
            'description' => 'Chemical storage warehouse fire.', 
            'case_nature' => 'Fire', 
            'feedback_comment' => 'Firefighters contained blaze', 
            'created_by' => 'George Amoah']);

        ValidCase::create([
            'case_id' => 'VSC1000050', 
            'reporting_time' => '13:40:22', 
            'reporting_date' => '2025-01-01', 
            'agency_id' => 3, 
            'region' => 'Ashanti', 
            'location' => 'Obuasi',
            'HOD' => 'Reviewed', 
            'contact_name' => 'Beatrice Agyemang', 
            'contact_number' => '0547788990', 
            'description' => 'Ambulance needed for accident victim with head injury.', 
            'case_nature' => 'Accident', 
            'feedback_comment' => 'Victim rushed to hospital', 
            'created_by' => 'Thomas Antwi'
            ]);
    }

}   