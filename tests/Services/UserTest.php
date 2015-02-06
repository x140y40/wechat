<?php

use Overtrue\Wechat\Services\User;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-02-05 at 18:08:23.
 */
class OvertrueWechatServicesUserTest extends TestCase
{
    /**
     * @var User
     */
    protected $object;

    /**
     * @covers Overtrue\Wechat\Services\User::get
     * @expectedException Exception
     */
    public function testGet()
    {
        $this->wechat->shouldReceive('request')
                        ->andReturn(array('openid' => 'mock_open_id'));

        $user = new User($this->wechat);
        $info = $user->get('mock_open_id');

        $this->assertArrayHasKey('openid', $info);
        $this->assertEquals('mock_open_id', $info['openid']);
        $this->assertEquals('mock_open_id', $info->openid);
    }

    /**
     * @covers Overtrue\Wechat\Services\User::users
     * @todo   Implement testUsers().
     */
    public function testUsers()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Overtrue\Wechat\Services\User::remark
     * @todo   Implement testRemark().
     */
    public function testRemark()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Overtrue\Wechat\Services\User::group
     * @todo   Implement testGroup().
     */
    public function testGroup()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Overtrue\Wechat\Services\User::getGroup
     * @todo   Implement testGetGroup().
     */
    public function testGetGroup()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}