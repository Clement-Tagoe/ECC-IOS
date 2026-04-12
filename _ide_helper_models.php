<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $contact
 * @property string $email
 * @property string $location
 * @property string $website
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ValidCase> $ValidCases
 * @property-read int|null $valid_cases_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Agency whereWebsite($value)
 */
	class Agency extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $incoming_calls
 * @property int $total_calls_received
 * @property int $valid_calls
 * @property int $prank_calls
 * @property int $unanswered_calls
 * @property \App\Enums\CallLogStatus $status
 * @property string $shift
 * @property string $start_time
 * @property string $end_time
 * @property string $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property-read \App\Models\User|null $creator
 * @property-read \App\Models\User|null $destroyer
 * @property-read \App\Models\User|null $editor
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereIncomingCalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog wherePrankCalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereShift($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereTotalCallsReceived($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereUnansweredCalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog whereValidCalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallLog withoutTrashed()
 */
	class CallLog extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $date
 * @property \App\Enums\ShiftType $shift_type
 * @property \App\Enums\ShiftStatus $status
 * @property int $expected_attendance
 * @property int $present
 * @property int $absent
 * @property int $absent_with_permission
 * @property int $occupied_consoles
 * @property int $unoccupied_consoles
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property-read \App\Models\User|null $creator
 * @property-read \App\Models\User|null $destroyer
 * @property-read \App\Models\User|null $editor
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereAbsent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereAbsentWithPermission($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereExpectedAttendance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereOccupiedConsoles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport wherePresent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereShiftType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereUnoccupiedConsoles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CallShiftReport withoutTrashed()
 */
	class CallShiftReport extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $region_id
 * @property string $camera_name
 * @property string|null $location
 * @property \App\Enums\CameraStatus $status
 * @property array<array-key, mixed>|null $observation
 * @property string|null $others
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Region|null $region
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit whereCameraName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit whereObservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit whereOthers($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CameraAudit whereUpdatedAt($value)
 */
	class CameraAudit extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $section_id
 * @property string $name
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Section|null $section
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CommandCenterStaff newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CommandCenterStaff newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CommandCenterStaff query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CommandCenterStaff whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CommandCenterStaff whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CommandCenterStaff whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CommandCenterStaff whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CommandCenterStaff whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CommandCenterStaff whereUpdatedAt($value)
 */
	class CommandCenterStaff extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $section_id
 * @property string $identifier
 * @property \App\Enums\ConsoleStatus $status
 * @property int|null $command_center_staff_id
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CommandCenterStaff|null $assignee
 * @property-read \App\Models\Section|null $section
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console whereCommandCenterStaffId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Console whereUpdatedAt($value)
 */
	class Console extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereUpdatedAt($value)
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $date
 * @property string $time
 * @property string $shift
 * @property \App\Enums\MonitoringTaskStatus $status
 * @property string $observation
 * @property int $region_id
 * @property string $location
 * @property string $recommendation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CameraAudit> $cameras
 * @property-read int|null $cameras_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \App\Models\Region|null $region
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Topic> $topics
 * @property-read int|null $topics_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereObservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereRecommendation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereShift($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MonitoringTask whereUserId($value)
 */
	class MonitoringTask extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereUpdatedAt($value)
 */
	class Region extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int|null $department_id
 * @property string $type
 * @property string $date
 * @property string $shift
 * @property string $title
 * @property \App\Enums\ReportPriority $priority
 * @property \App\Enums\ReportStatus $status
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $collaborators
 * @property-read int|null $collaborators_count
 * @property-read \App\Models\Department|null $department
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $receivers
 * @property-read int|null $receivers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ReportComment> $reportComments
 * @property-read int|null $report_comments_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereShift($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereUserId($value)
 */
	class Report extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $report_id
 * @property int $user_id
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Report $report
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportComment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportComment whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportComment whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportComment whereUserId($value)
 */
	class ReportComment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Console> $consoles
 * @property-read int|null $consoles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShiftReport> $shiftReports
 * @property-read int|null $shift_reports_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CommandCenterStaff> $staffs
 * @property-read int|null $staffs_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Section query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Section whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Section whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Section whereUpdatedAt($value)
 */
	class Section extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $date
 * @property \App\Enums\ShiftType $shift_type
 * @property int $section_id
 * @property int $expected_attendance
 * @property int $present
 * @property int $absent
 * @property int $absent_with_permission
 * @property int $occupied_consoles
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Section|null $section
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereAbsent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereAbsentWithPermission($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereExpectedAttendance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereOccupiedConsoles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport wherePresent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereShiftType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShiftReport whereUserId($value)
 */
	class ShiftReport extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string|null $description
 * @property \App\Enums\TaskStatus $status
 * @property \App\Enums\TaskPriority $priority
 * @property string|null $due_date
 * @property string|null $completed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $collaborators
 * @property-read int|null $collaborators_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereUserId($value)
 */
	class Task extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topic query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topic whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Topic whereUpdatedAt($value)
 */
	class Topic extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $contact
 * @property int|null $department_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wirechat\Wirechat\Models\Conversation> $conversations
 * @property-read int|null $conversations_count
 * @property-read User|null $creator
 * @property-read \App\Models\Department|null $department
 * @property-read User|null $destroyer
 * @property-read User|null $editor
 * @property-read string|null $cover_url
 * @property-read string|null $display_name
 * @property-read string|null $profile_url
 * @property-read string|null $wirechat_avatar_url
 * @property-read string|null $wirechat_name
 * @property-read string|null $wirechat_profile_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ReportComment> $reportComments
 * @property-read int|null $report_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Report> $reports
 * @property-read int|null $reports_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $case_id
 * @property string $reporting_time
 * @property string $reporting_date
 * @property int $agency_id
 * @property string $location
 * @property \App\Enums\ValidCaseStatus $status
 * @property string $region
 * @property string $contact_name
 * @property string $contact_number
 * @property string $description
 * @property string $case_nature
 * @property string $feedback_comment
 * @property string $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Agency|null $agency
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereAgencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereCaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereCaseNature($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereContactNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereFeedbackComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereReportingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereReportingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ValidCase whereUpdatedAt($value)
 */
	class ValidCase extends \Eloquent {}
}

