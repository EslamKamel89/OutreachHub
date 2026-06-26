<?php

namespace App\Enums\Task;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum TaskType: string implements HasColor, HasIcon, HasLabel
{
    case ResearchCompany = 'research_company';
    case ResearchContact = 'research_contact';
    case ViewLinkedInProfile = 'view_linkedin_profile';

    case LeaveFirstComment = 'leave_first_comment';
    case LeaveSecondComment = 'leave_second_comment';
    case LeaveThirdComment = 'leave_third_comment';

    case SendConnectionRequest = 'send_connection_request';
    case WaitForAcceptance = 'wait_for_acceptance';

    case SendFirstMessage = 'send_first_message';
    case SendFollowUp = 'send_follow_up';

    case CheckCompanyJobs = 'check_company_jobs';

    case ScheduleInterview = 'schedule_interview';

    case Other = 'other';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::ResearchCompany => 'Research Company',
            self::ResearchContact => 'Research Contact',
            self::ViewLinkedInProfile => 'View LinkedIn Profile',

            self::LeaveFirstComment => 'Leave First Comment',
            self::LeaveSecondComment => 'Leave Second Comment',
            self::LeaveThirdComment => 'Leave Third Comment',

            self::SendConnectionRequest => 'Send Connection Request',
            self::WaitForAcceptance => 'Wait For Acceptance',

            self::SendFirstMessage => 'Send First Message',
            self::SendFollowUp => 'Send Follow-up',

            self::CheckCompanyJobs => 'Check Company Jobs',

            self::ScheduleInterview => 'Schedule Interview',

            self::Other => 'Other',
        };
    }

    public function getIcon(): string|BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::ResearchCompany => 'heroicon-o-building-office',
            self::ResearchContact => 'heroicon-o-magnifying-glass',
            self::ViewLinkedInProfile => 'heroicon-o-user-circle',

            self::LeaveFirstComment,
            self::LeaveSecondComment,
            self::LeaveThirdComment => 'heroicon-o-chat-bubble-left-ellipsis',

            self::SendConnectionRequest => 'heroicon-o-user-plus',
            self::WaitForAcceptance => 'heroicon-o-clock',

            self::SendFirstMessage,
            self::SendFollowUp => 'heroicon-o-paper-airplane',

            self::CheckCompanyJobs => 'heroicon-o-briefcase',

            self::ScheduleInterview => 'heroicon-o-calendar-days',

            self::Other => 'heroicon-o-ellipsis-horizontal-circle',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::ResearchCompany,
            self::ResearchContact,
            self::ViewLinkedInProfile => 'gray',

            self::LeaveFirstComment,
            self::LeaveSecondComment,
            self::LeaveThirdComment => 'info',

            self::SendConnectionRequest,
            self::SendFirstMessage,
            self::SendFollowUp => 'primary',

            self::WaitForAcceptance => 'warning',

            self::CheckCompanyJobs => 'success',

            self::ScheduleInterview => 'danger',

            self::Other => 'gray',
        };
    }
}
