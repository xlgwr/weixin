<?php
function strExists($haystack, $needle)
{
	return !(strpos($haystack, $needle) === FALSE);
}
class IndexAction extends BaseAction{
	private $tpl;	//微信公共帐号信息
	private $info;	//分类信息
	public $wecha_id;
	private $copyright;
	public $company;
	public $token;
	
	public function _initialize(){
		parent::_initialize();
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$this->token=$this->_get('token','trim');
		$where['token']=$this->token;
		
		$tpl=D('Wxuser')->where($where)->find();
		//dump($where);
		$info=M('Classify')->where(array('token'=>$this->_get('token'),'status'=>1))->order('sorts desc')->select();
		$info=$this->convertLinks($info);//加外链等信息
		$gid=D('Users')->field('gid')->find($tpl['uid']);
		$copy=D('user_group')->field('iscopyright')->find($gid['gid']);	//查询用户所属组
		$this->copyright=$copy['iscopyright'];
		$this->wecha_id=$this->_get('wecha_id');
		$this->info=$info;
		$this->tpl=$tpl;
		$company_db=M('company');
		$this->company=$company_db->where(array('token'=>$this->token,'isbranch'=>0))->find();
		$this->assign('company',$this->company);
		//
		
		$this->assign('token',$this->token);
	}
	
	
	public function classify(){
		$this->assign('info',$this->info);
		
		$this->display($this->tpl['tpltypename']);
	}
	
	public function index(){
		$where['token']=$this->_get('token');
		//dump($where);
	//	$where['status']=1;
		$flash_lists = M('Flash')->where($where)->select();
		$flash = $this->convertLinks($flash_lists);
		$count=count($flash);
		$this->assign('flash',$flash);
		$this->assign('num',$count);
		$this->assign('info',$this->info);
		$this->assign('tpl',$this->tpl);
		$this->assign('copyright',$this->copyright);
		$this->display($this->tpl['tpltypename']);
		
	}
	
	public function lists(){
		$where['token']=$this->_get('token','trim');
		$db=D('Img');	
		if($_GET['p']==false){
			$page=1;
		}else{
			$page=$_GET['p'];			
		}		
		$where['classid']=$this->_get('classid','intval');
		$count=$db->where($where)->count();		
		$pagecount=ceil($count/5);
		if($page > $count){$page=$pagecount;}
		if($page >=1){$p=($page-1)*5;}
		if($p==false){$p=0;}
		$res=$db->where($where)->limit("{$p},5")->select();
		$res=$this->convertLinks($res);
		$this->assign('page',$pagecount);
		$this->assign('p',$page);
		$this->assign('info',$this->info);
		$this->assign('tpl',$this->tpl);
		$this->assign('res',$res);
		$this->assign('copyright',$this->copyright);
		$this->display($this->tpl['tpllistname']);
		
	}
	
	public function content(){
		$db=M('Img');
		$where['token']=$this->_get('token','trim');
		$where['id']=array('neq',(int)$_GET['id']);
		$lists=$db->where($where)->limit(5)->order('uptatetime')->select();
		$where['id']=$this->_get('id','intval');
		$res=$db->where($where)->find();
		$this->assign('info',$this->info);	//分类信息
		$this->assign('lists',$lists);		//列表信息
		$this->assign('res',$res);			//内容详情;
		$this->assign('tpl',$this->tpl);				//微信帐号信息
		$this->assign('copyright',$this->copyright);	//版权是否显示
		$this->display($this->tpl['tplcontentname']);
	}
	
	public function flash(){
		$where['token']=$this->_get('token','trim');
		$flash_lists = M('Flash')->where($where)->select();
		$flash = $this->convertLinks($flash_lists);
		$count=count($flash);
		$this->assign('flash',$flash);
		$this->assign('info',$this->info);
		$this->assign('num',$count);
		$this->display('ty_index');
	}
	/**
	 * 获取链接
	 *
	 * @param unknown_type $url
	 * @return unknown
	 */
	public function getLink($url){
		preg_match_all("/^((https?|ftp|news):\/\/)?([a-z]([a-z0-9\-]*[\.。])+([a-z]{2}|aero|arpa|biz|com|coop|edu|gov|info|int|jobs|mil|museum|name|nato|net|org|pro|travel)|(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]))(\/[a-z0-9_\-\.~]+)*(\/([a-z0-9_\-\.]*)(\?[a-z0-9+_\-\.%=&]*)?)?(#[a-z][a-z0-9_]*)?$/",$url,$b);
		$this->wecha_id = $this->_get('wecha_id');
		//会员卡 刮刮卡 团购 商城 大转盘 优惠券 订餐 商家订单
		if($b[0]){
			$link=$url;
		}else{
			$link = $this->keyword($url,$this->wecha_id);
		}
		/*if (strExists($url,'刮刮卡')){
			$link = $this->keyword('刮刮卡',$this->wecha_id);
		}elseif (strExists($url,'大转盘')){
			$link = $this->keyword('大转盘',$this->wecha_id);
		}elseif (strExists($url,'优惠券')){
			$link=C('site_url').'/index.php?g=Wap&m=Coupon&a=index&token='.$this->token .'&wecha_id='.$this->wecha_id;
			if ($itemid){
				$link.='&id='.$itemid;
			}
		}elseif (strExists($url,'商家订单')){
			if ($itemid){
				$link=$link=C('site_url').'/index.php?g=Wap&m=Host&a=index&token='.$this->token .'&wecha_id='.$this->wecha_id.'&hid='.$itemid;
			}else {
				$link=C('site_url').'/index.php?g=Wap&m=Host&a=Detail&token='.$this->token .'&wecha_id='.$this->wecha_id;
			}
		}elseif (strExists($url,'会员卡')){
			$link=C('site_url').'/index.php?g=Wap&m=Card&a=vip&token='.$this->token .'&wecha_id='.$this->wecha_id;
		}elseif (strExists($url,'商城')){
			$link=C('site_url').'/index.php?g=Wap&m=Product&a=index&token='.$this->token .'&wecha_id='.$this->wecha_id;
		}elseif (strExists($url,'订餐')){
			$link=C('site_url').'/index.php?g=Wap&m=Product&a=dining&dining=1&token='.$this->token .'&wecha_id='.$this->wecha_id;
		}elseif (strExists($url,'团购')){
			$link=C('site_url').'/index.php?g=Wap&m=Groupon&a=grouponIndex&token='.$this->token .'&wecha_id='.$this->wecha_id;
		}else {
			$link=$url;
		}*/
		return $link;
	}
	public function convertLinks($arr){
		$i=0;
		foreach ($arr as $a){
			if ($a['url']){
				$arr[$i]['url']=$this->getLink($a['url']);
			}
			$i++;
		}
		return $arr;
	}
	public function keyword($key,$we_id){
        $like['keyword'] = array(
            'like',
            '%' . $key . '%'
        );
        $like['token']   = $this->token;
        $data            = M('keyword')->where($like)->order('id desc')->find();
		if ($data != false){
            switch ($data['module']){
                case 'Img':
                    $this->requestdata('imgnum');
                    $img_db   = M($data['module']);
                    $back     = $img_db->field('id,text,pic,url,title')->limit(9)->order('id desc')->where($like)->select();
                    $idsWhere = 'id in (';
                    $comma    = '';
                    foreach ($back as $keya => $infot) {
                        $idsWhere .= $comma . $infot['id'];
                        $comma = ',';
                        if ($infot['url'] != false) {
                            if (!(strpos($infot['url'], 'http') === FALSE)) {
                                $url = $infot['url'];
                            } else {
                                $urlInfos = explode(' ', $infot['url']);
                                switch ($urlInfos[0]) {
                                    case '刮刮卡':
                                        $url = C('site_url') . U('Wap/Guajiang/index', array(
                                            'token' => $this->token,
                                            'wecha_id' => $we_id,
                                            'id' => $urlInfos[1]
                                        ));
                                        break;
                                    case '大转盘':
                                        $url = C('site_url') . U('Wap/Lottery/index', array(
                                            'token' => $this->token,
                                            'wecha_id' => $we_id,
                                            'id' => $urlInfos[1]
                                        ));
                                        break;
                                    case '商家订单':
                                        $url = C('site_url') . '/index.php?g=Wap&m=Host&a=index&token=' . $this->token . '&wecha_id=' . $we_id . '&hid=' . $urlInfos[1];
                                        break;
                                    case '优惠券':
                                        $url = C('site_url') . U('Wap/Coupon/index', array(
                                            'token' => $this->token,
                                            'wecha_id' => $we_id,
                                            'id' => $urlInfos[1]
                                        ));
                                        break;
                                }
                            }
                        } else {
                            $url = rtrim(C('site_url'), '/') . U('Wap/Index/content', array(
                                'token' => $this->token,
                                'id' => $infot['id']
                            ));
                        }
					}
                    $idsWhere .= ')';
                    if ($back) {
                        $img_db->where($idsWhere)->setInc('click');
                    }
                    break;
                case 'Host':
                    $this->requestdata('other');
                    $host = M('Host')->where(array(
                        'id' => $data['pid']
                    ))->find();
                    
					$url = C('site_url') . '/index.php?g=Wap&m=Host&a=index&token=' . $this->token . '&wecha_id=' . $we_id . '&hid=' . $data['pid'];
                     
                    break;
                case 'Product':
                    $this->requestdata('other');
                    $pro = M('Product')->where(array(
                        'id' => $data['pid']
                    ))->find();
                   
                    $url = C('site_url') . '/index.php?g=Wap&m=Product&a=product&token=' . $this->token . '&wecha_id=' . $we_id . '&id=' . $data['pid'];
                          
                    break;
                case 'Selfform':
                    $this->requestdata('other');
                    $pro = M('Selfform')->where(array(
                        'id' => $data['pid']
                    ))->find();
                    $url = C('site_url') . '/index.php?g=Wap&m=Selfform&a=index&token=' . $this->token . '&wecha_id=' . $we_id . '&id=' . $data['pid'];
                    break;
                case 'Lottery':
                    $this->requestdata('other');
                    $info = M('Lottery')->find($data['pid']);
					
                    if ($info == false || $info['status'] == 3) {
                        return array(
                            '活动可能已经结束或者被删除了',
                            'text'
                        );
                    }
                    switch ($info['type']) {
                        case 1:
                            $model = 'Lottery';
                            break;
                        case 2:
                            $model = 'Guajiang';
                            break;
                        case 3:
                            $model = 'Coupon';
                    }
                    $id   = $info['id'];
                    $type = $info['type'];
                    if ($info['status'] == 1) {
                        $picurl = $info['starpicurl'];
                        $title  = $info['title'];
                        $id     = $info['id'];
                        $info   = $info['info'];
                    } else {
                        $picurl = $info['endpicurl'];
                        $title  = $info['endtite'];
                        $info   = $info['endinfo'];
                    }
					
                    $url = C('site_url') . U('Wap/' . $model . '/index', array(
                        'token' => $this->token,
                        'type' => $type,
                        'wecha_id' => $we_id,
                        'id' => $id,
                        'type' => $type
                    ));
					
					break;
                default:
                    $this->requestdata('videonum');
                    $info = M($data['module'])->order('id desc')->find($data['pid']);
                    
					$url = $info['musicurl'];
            }
		}else{
			switch($key){
				case '首页':
					$url = $this->home();
					break;
				case '会员卡':
                    $url = $this->member();
                    break;
				case '会员':
                    $url = $this->member();
                    break;
				case '3g相册':
                    $url = $this->xiangce();
                    break;
                case '相册':
                    $url = $this->xiangce();
                    break;
				case '商城':
                    $url = C('site_url') . '/index.php?g=Wap&m=Product&a=index&token=' . $this->token . '&wecha_id=' . $we_id;
                    break;
				case '订餐':
                    $url = C('site_url') . '/index.php?g=Wap&m=Product&a=dining&dining=1&token=' . $this->token . '&wecha_id=' . $we_id;
                    break;
                case '团购':
                    $url = C('site_url') . '/index.php?g=Wap&m=Groupon&a=grouponIndex&token=' . $this->token . '&wecha_id=' . $we_id;
                    break;
				default:
					$url = $this->home();
			}
		}
		return $url;
    }
	public function requestdata($field)
    {
        $data['year']  = date('Y');
        $data['month'] = date('m');
        $data['day']   = date('d');
        $data['token'] = $this->token;
        $mysql         = M('Requestdata');
        $check         = $mysql->field('id')->where($data)->find();
        if ($check == false) {
            $data['time'] = time();
            $data[$field] = 1;
            $mysql->add($data);
        } else {
            $mysql->where($data)->setInc($field);
        }
    }
	public function home(){
		
        return $this->shouye();
    }
    public function shouye($name)
    {
		$home = M('Home')->where(array(
            'token' => $this->token
        ))->find();
        if ($home == false) {
            
            $url = '商家未做首页配置，请稍后再试';
                
        }else{
			
            if ($home['apiurl'] == false) {
                $url = rtrim(C('site_url'), '/') . '/index.php?g=Wap&m=Index&a=index&token='. $this->token .'&wecha_id='.$this->wecha_id;
            } else {
                $url = $home['apiurl'];
            }
        }
		
        return $url;
    }
	public function member(){
        $card     = M('member_card_create')->where(array(
            'token' => $this->token,
            'wecha_id' => $this->wecha_id
        ))->find();
        $cardInfo = M('member_card_set')->where(array(
            'token' => $this->token
        ))->find();
        if ($card == false) {
            $url = rtrim(C('site_url'), '/') . U('Wap/Card/get_card', array(
                'token' => $this->token,
                'wecha_id' => $this->wecha_id
            ));
        } else {
            $url = rtrim(C('site_url'), '/') . U('Wap/Card/vip', array(
                'token' => $this->token,
                'wecha_id' => $this->wecha_id
            ));
        }
        return $url;
    }
	function xiangce(){
        $photo           = M('Photo')->where(array(
            'token' => $this->token,
            'status' => 1
        ))->find();
        $url = rtrim(C('site_url'), '/') . U('Wap/Photo/index', array(
            'token' => $this->token,
            'wecha_id' => $this->wecha_id
        ));
        return $url;
    }
}