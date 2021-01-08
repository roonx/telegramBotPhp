<?php


namespace telegramBotApiPhp\Types;

/**
 * Class ChatMember
 * @package telegramBotApiPhp\Types
 * @method User getUser()
 * @method string getStatus()
 * @method string getCustomTitle()
 * @method bool getIsAnonymous()
 * @method bool getCanBeEdited()
 * @method bool getCanPostMessages()
 * @method bool getCanEditMessages()
 * @method bool getCanDeleteMessages()
 * @method bool getCanRestrictMembers()
 * @method bool getCanPromoteMembers()
 * @method bool getCanChangeInfo()
 * @method bool getCanInviteUsers()
 * @method bool getCanPinMessages()
 * @method bool getIsMember()
 * @method bool getCanSendMessages()
 * @method bool getCanSendMediaMessages()
 * @method bool getCanSendPolls()
 * @method bool getCanSendOtherMessages()
 * @method bool getCanAddWebPagePreviews()
 * @method int getUntilDate()
 */
class ChatMember extends base
{
    static protected $map = [
        'user' => User::class,
        'status' => true,
        'custom_title' => true,
        'is_anonymous' => true,
        'can_be_edited' => true,
        'can_post_messages' => true,
        'can_edit_messages' => true,
        'can_delete_messages' => true,
        'can_restrict_members' => true,
        'can_promote_members' => true,
        'can_change_info' => true,
        'can_invite_users' => true,
        'can_pin_messages' => true,
        'is_member' => true,
        'can_send_messages' => true,
        'can_send_media_messages' => true,
        'can_send_polls' => true,
        'can_send_other_messages' => true,
        'can_add_web_page_previews' => true,
        'until_date' => true,
    ];
    protected $User;
    protected $Status;
    protected $CustomTitle;
    protected $IsAnonymous;
    protected $CanBeEdited;
    protected $CanPostMessages;
    protected $CanEditMessages;
    protected $CanDeleteMessages;
    protected $CanRestrictMembers;
    protected $CanPromoteMembers;
    protected $CanChangeInfo;
    protected $CanInviteUsers;
    protected $CanPinMessages;
    protected $IsMember;
    protected $CanSendMessages;
    protected $CanSendMediaMessages;
    protected $CanSendPolls;
    protected $CanSendOtherMessages;
    protected $CanAddWebPagePreviews;
    protected $UntilDate;


    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}