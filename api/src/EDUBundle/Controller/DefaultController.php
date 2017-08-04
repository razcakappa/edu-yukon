<?php

namespace EDUBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
#use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RequestContext;
//use DBP\InterfazIcedbpBundle\Form\DataTransformer\StringToArrayTransformer;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Constraints\DateTime;

//form
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
//use Symfony\Component\Form\Extension\Core\Type\NewMessageType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\MessageSelector;
use Symfony\Component\Translation\Loader\XliffFileLoader;

//use EDUBundle\Form as Form;
use EDUBundle\Form\UserType;
use EDUBundle\Form\UserEditType;
use EDUBundle\Form\ClassType;
use EDUBundle\Form\AddClassType;
use EDUBundle\Form\StudentEditType; 
use EDUBundle\Form\ClassSubjectType; 
use EDUBundle\Form\ClassSubjectEditType; 
use EDUBundle\Form\ClassMessageType;


//DB Entity
use EDUBundle\Entity\Users;
use EDUBundle\Entity\contact;
use EDUBundle\Entity\Classes;
use EDUBundle\Entity\Teacher;
use EDUBundle\Entity\Subject;
use EDUBundle\Entity\Student; 
use EDUBundle\Entity\ClassSubject;
use EDUBundle\Entity\TeacherSubjects;

// Custom libraries
use ForceUTF8\Encoding;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
		error_log('CAM',0);
        return $this->render('EDUBundle:Default:index.html.twig');
    }
	
	
	/*new user with address
	 *@Route("/new/user", name="new_user")
	 */
	public function newuserAction(Request $request)
	{
		$user 	 = new Users;
		$address = new contact;
		
		$form = $this->createForm(UserType::class, $user);
		
		$form->handleRequest($request);
		
		return $this->render('EDUBundle:Form:newuser.html.twig',
							 array(
									'title' => 'Add New User',
									'form' 	=> $form->createView()
        ));
	}
	
	
    /**
     * Get Users list
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route(name="user_list")
     */
    public function getUsersAction(Request $request) {
        //$em = $this->getDoctrine()->getManager();
        //$users = $em->getRepository('EDUBundle:Users')->findAll();
        //
        //$translator = $this->get('translator');
        //
        //$locale = $request->getLocale();
        //
        //return $this->render(
        //    'EDUBundle:users:layout_all_users.html.twig',
        //    array(
        //        'users'	=> $users,
        //        'title' => $translator->trans('%USERS%'),
        //        'tables' => 1,
        //        'locale' => $locale
        //    )
        //);
		//error_log('U-CAM',0);	
		if( $this->get('security.authorization_checker')->isGranted('ROLE_EDUCATOR') ||
			$this->get('security.authorization_checker')->isGranted('ROLE_TUTOR'))
		{
			return $this->redirectToRoute('message_inbox');
		}
		else
		{
			$em = $this->getDoctrine()->getManager();
			$users = $em->getRepository('EDUBundle:Users')->findAll();
			
			//translations
			$translator = $this->get('translator');
			
			$locale = $request->getLocale();
			
			return $this->render(
				'EDUBundle:users:layout_all_users.html.twig',
				array(	'users'		=> $users,
						'title' 	=> $translator->trans('%USERS%'),
						'tables' 	=> 1,
						'locale' 	=> $locale
					)
			);
		}
    }
	
    
    /**
     *Shows User information
     *
     *@Route("/user/info/{id}", name="user_info")
     */
    public function getUserInfoAction( $id, Request $request )
    {
		//translations
		
        $translator = $this->get('translator');
		
        $em     = $this->getDoctrine()->getManager();
        $user   = $em->getRepository('EDUBundle:Users')->find($id);
        
		//set updated to 0
		if( $user->getUpdated() == 1 )
		{
			$user->setUpdated(0);
			$em->persist($user);
			$em->flush();
		}
		
        return $this->render(	'EDUBundle:users:layout_user_info.html.twig',
								array(	'user' => $user,
										'title' => $translator->trans('%USER%'),
										'tables' => 1 )
        );
        
    }
	
	/**
     *Shows Teacher information
     *
     *@Route("/teacher/info/{id}", name="teacher_info")
     */
    public function getTeacherInfoAction( $id, Request $request )
    {
		//translations
        $translator = $this->get('translator');
		
        $em     = $this->getDoctrine()->getManager();
        $user   = $em->getRepository('EDUBundle:Users')->find($id);
		
		
		/*
        return $this->render(	'EDUBundle:users:layout_teacher_info.html.twig',
								array(	'user' => $user,
										'title' => $translator->trans('%USER%'),
										'tables' => 1 )
        );*/
		
		//view_info.html.twig
		
		
		
        return $this->render('EDUBundle:users:view_info.html.twig',
								array(	'user' => $user,
										'title' => $translator->trans('%USER%'),
										'tables' => 1 )
        );
		
		
		
	
    }
	
	
	/**
     *Shows Teacher information
     *
     *@Route("/student/info/{id}", name="student_info")
     */
    public function getStudentInfoAction( $id, Request $request )
    {
		//translations
        $translator = $this->get('translator');
		
        $em     = $this->getDoctrine()->getManager();
        $user   = $em->getRepository('EDUBundle:Users')->find($id);
        
        return $this->render(	'EDUBundle:users:layout_student_info.html.twig',
								array(	'user' => $user,
										'title' => $translator->trans('%USER%'),
										'tables' => 1 )
        );
    }
	
	
	
	/**
	 *	@return	all Rolese as an array
	 */
	function getRole()
    {
		$translator = $this->get('translator');
		$roles 		= array(	"ADMIN"		=>	$translator->trans("ROLE_ADMIN"),
								"TEACHER"	=>	$translator->trans("ROLE_TEACHER"),
								"STUDENT"	=>	$translator->trans("ROLE_STUDENT"),
								);
			
		return $roles;
	}
    /**
     *Shows User information
     *
     *@Route("/user/add", name="user_new")
     */
    public function addNewUserAction(Request $request)
    {
        if($request->query->get('new_user')){
            //print_r($request->query->get('new_user'));die('HARD');
        }
		//translations
        $translator = $this->get('translator');
        $user 	 = new Users;
		$form = $this->createForm(UserType::class, $user, array('UserRole' =>$this->getRole()));
		$form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
		{
            $pass   = $form['password']->getData();
			$role   = $form['roles']->getData();
			$role_array=$this->getRole();
			
			$keys = array_keys($role_array);
			
			// new user cannot have previously added email, phone number or contact number
			$user_email = $form['email']->getData(); // new users email
			$user_name	= $form['username']->getData(); // new users username
			$user_pnum	= $form['phonenumber']->getData(); // new users phonenumber
			$user_snum	= $form['contact']['contactNumber']->getData(); // new users phonenumber
			$userErMsg	= array(); // list of error messages as an array
			$em 	= $this->getDoctrine()->getManager();
			$users  = $em->getRepository('EDUBundle:Users')->findAll();
			
			foreach( $users as $new_user )
			{
				$exist_mail 	= $new_user->getEmail();
				$exist_uname	= $new_user->getUsername();
				$exist_phone	= $new_user->getPhoneNumber();
				$exist_contact	= $new_user->getContact()->getContactNumber();
				
				if( $exist_mail == $user_email )
				{
					$userErMsg[] = $translator->trans('%existEmail% is already in the database. Please try with new Email', array( '%existEmail%' => $exist_mail ));
				}
				
				if( $exist_uname == $user_name )
				{
					$userErMsg[] = $translator->trans('%existUname% is already in the database. Please try with new Email', array( '%existUname%' => $exist_uname ));
				}
				
				if( $exist_phone == $user_pnum )
				{
					$userErMsg[] = $translator->trans('%existPhone% is already in the database. Please try with new Phone Number', array( '%existPhone%' => $exist_phone ));
				}
				
				if( $exist_contact == $user_snum )
				{
					$userErMsg[] = $translator->trans('%existContact% is already in the database. Please try with new Phone Number', array( '%existContact%' => $exist_contact ));
				}
			}
            
            $notvalid = false;

			if( $userErMsg ) // NewUser post data has email, phone number or contact number duplicates with DB
			{
				foreach( $userErMsg as $message )
				{
					$this->addFlash('warning', $message );
                }
                $notvalid = true;
				//break;
				//return $this->redirectToRoute('user_new',array('new_user'=>1));
			}
			
			if( in_array($role_array[$keys[2]], $role) && sizeof($role) != 1 ) // role student selected with other roles
			{
				$this->addFlash('warning',
								$translator->trans('Role Student cannot have Admin, Teacher or Parent roles')
                            );
                $notvalid = true;
                //break;
				//return $this->redirectToRoute('user_new',array('new_user'=>1));
				//return $this->redirectToRoute('user_new');
			}
			
			if( in_array($role_array[$keys[0]], $role) && sizeof($role) != 1 ) // role student selected with other roles
			{
				$this->addFlash('warning',
								$translator->trans('Role Admin cannot have  Student, Teacher or Parent roles')
                            );
                $notvalid = true;
                //break;
				//return $this->redirectToRoute('user_new',array('new_user'=>1));
				//return $this->redirectToRoute('user_new');
            }

            if(!$notvalid){
                $user->setPlainPassword($pass);
                $user->setRoles($role);
                $user->setEnabled('1');
                $em 	= $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $this->addFlash('notice',
                    $translator->trans('%USER_ADDED%')
                );

                return $this->redirectToRoute('user_list');
            }
		}

        /*
        if($request->query->get('new_user')){
            return $this->render('EDUBundle:Form:newuser.html.twig',
                array(	
                    'title' => $translator->trans('%AD_NW_SR%'),
                    'email'	=> $request->query->get('new_user'),
                    'form' 	=> $form->createView()
                ));
        }
         */
		return $this->render('EDUBundle:Form:newuser.html.twig',
            array(	
                'title' => $translator->trans('%AD_NW_SR%'),
                             'form' 	=> $form->createView()
        ));
	}
	
	/**
    *	Edit user page
    *
    *@Route("user/edit/{id}", name="user_edit_a")
    *	@return	user edit form
    */
	public function userEditAction($id, Request $request )
	{
		//translations
        $translator = $this->get('translator');
		
		$em 	= $this->getDoctrine()->getManager();
		$user   = $em->getRepository('EDUBundle:Users')->find($id);
		if (!$user)
		{
			throw $this->createNotFoundException($translator->trans('%NO_US_ID%').$id);
		}
		$form = $this->createForm(UserEditType::class, $user,
								  array('UserRole' =>$this->getRole(),
										));
		$form->handleRequest($request);
		
		
		if( $form->isSubmitted() && $form->isValid() )
		{
			$role   = $form['roles']->getData();
			$role_array=$this->getRole();
			$keys = array_keys($role_array);
				
			if( in_array($role_array[$keys[2]], $role) && sizeof($role) != 1 ) // role student selected with other roles
			{
				$this->addFlash('warning',
								$translator->trans('Role Student cannot have Admin, Teacher or Parent roles')
				);
				
				
				return $this->redirectToRoute('user_edit_a',array('id'=>$id));
			}
			
			if( in_array($role_array[$keys[0]], $role) && sizeof($role) != 1 ) // role student selected with other roles
			{
				$this->addFlash('warning',
								$translator->trans('Role Admin cannot have  Student, Teacher or Parent roles')
				);
				
				return $this->redirectToRoute('user_edit_a',array('id'=>$id));
			}
			
			$user->setRoles($role);	
			
			$em->persist($user);
			$em->flush();
			
            $this->addFlash(
                'notice',
                $translator->trans('%US_UD%')
            );
			
			return $this->redirectToRoute('user_list');
		}
		
		return $this->render('EDUBundle:Form:edituser.html.twig',
							 array(	'user'	=> $user,
									'title' => $translator->trans('%EDIT_USER%'),
									'form' 	=> $form->createView()
        ));
	}
	
	
	/**
    *teachers list page
    *
    *@Route("/user/teachers", name="user_teachers")
    */
	public function listTeachersAction(Request $request)
	{
		//translations
        $translator = $this->get('translator');
        $locale = $request->getLocale();
		$em 	= $this->getDoctrine()->getManager();
        
		// get all the teachers
		$query = $this->getDoctrine()->getEntityManager()
						->createQuery('SELECT u FROM EDUBundle:Users u WHERE u.roles LIKE :role')
						->setParameter('role', '%"ROLE_TEACHER"%' );
		$users = $query->getResult();
		$subs 		= array();
		$childs 	= array();
		$elements 	= array();
		
		$i = 0;
		foreach( $users as $user )
		{
			$elements[$i]['user'] = $user;
			$subs = $em->getRepository('EDUBundle:TeacherSubjects')->findBy( array('teachers' => $user->getId()) );
			$elements[$i]['subs'] = $subs;
			$elements[$i]['childs'] = $childs;
			$i++;
		}
		
//		$qb     = $this->getDoctrine()->getManager()->createQueryBuilder();
//        $query  =   $qb
//            ->select('u, t')
//            ->from('EDUBundle:Users', 'u')
//            ->Join('EDUBundle:TeacherSubjects', 't')
//            ->where('u.roles LIKE :role')
//            ->setParameter('role','%"ROLE_TEACHER"%')
//            ->getQuery();
//        $result = $query->getResult();
		
		//print_r($techers);
		//die;
		//$em 	= $this->getDoctrine()->getManager();
		//$subs = $em->getRepository('EDUBundle:TeacherSubjects')->findBy( array('teachers' => $id) );
		
        return $this->render('EDUBundle:users:layout_teaches_users.html.twig',
							array(
								'users' 	=> $elements,
								'title' 	=> $translator->trans('%TEACHERS%'),
								'tables'	=> 1
							)
        );
	}
	
	
	/**
    *	students list page
    *
    *@Route("/user/students", name="user_students")
    */
	public function listStudentAction(Request $request)
	{
		//translations
        $translator = $this->get('translator');

      
        $qb   = $this->getDoctrine()->getManager()->createQueryBuilder();

        $query  =   $qb
            ->select('u, s')
            ->from('EDUBundle:Users', 'u')
            ->leftJoin('u.student', 's')
            ->where('u.roles LIKE :rol')
            ->setParameter('rol','%"ROLE_STUDENT"%')
            ->getQuery();

        $result = $query->getResult();
		
		$user_var=array();
		
		$i = 0; // count
		foreach($result as $res){
			$user_var[$i]['user'] = $res;
			
			$sub_names; // empty subject name array
			$class_repo = $this->getDoctrine()
						->getRepository('EDUBundle:Student')
						->findOneBy(array('users'=>$res->getId()));
			
			if($class_repo){
				$subjects_arr = $this->getDoctrine()
							->getRepository('EDUBundle:ClassSubject')
							->findBy(array('class'=>$class_repo
			
				));
							
				foreach($subjects_arr as $subs){
					$sub_names[] =  $subs->getSubjects()->getName();
										   
				}
			}
			
			$user_var[$i]['subjects'] = !empty($sub_names) ? $sub_names : NULL;						
			$user_var[$i]['class'] = !empty($class_repo) ? ($class_repo->getClasses()) : NULL;
			
			$i++;
		}
	
		
        return $this->render('EDUBundle:users:layout_students_users.html.twig',
							array(
								'users' => $result,
								'user_var' => $user_var,
								'title' => $translator->trans('%STUDENTS%'),
								'tables'=> 1
							)
        );
	}
	
	
	
	/**
    *Edit user page
    *
    *@Route("/useredit/{id}", name="user_edit")
    *@return	user edit form
    */
    public function edituserAction( $id, Request $request )
    {
        $user   = $this->getDoctrine()
						->getRepository('EDUBundle:Users')
						->find($id);
		
		// gets user information
		$user->setFirstname( $user->getFirstname() );
		$user->setLastname( $user->getLastname() );
		$user->setEmail( $user->getEmail() );
		$user->setRoles( $user->getRoles() );
		$user->setPhoneNumber( $user->getPhoneNumber() );
		
		
		$form = $this->createFormBuilder($user)
                ->add('firstname', TextType::class, array(
                                                            'attr'  =>  array('class' => 'form-control',
                                                                              'style' => 'margin:5px 0;')
                                                         ) )
                ->add('lastname', TextType::class, array(
                                                            'attr'  =>  array('class' => 'form-control',
                                                                              'style' => 'margin:5px 0;')
                                                         ) )
                ->add('email', EmailType::class, array(
                                                            'attr'  =>  array('class' => 'form-control',
                                                                              'style' => 'margin:5px 0;')
                                                         ) )
				->add('roles', ChoiceType::class, array(
                                                            'attr'  =>  array('class' => 'form-control',
                                                            'style' => 'margin:5px 0;'),
                                                            'choices' => 
                                                            array
                                                            (
                                                                'ROLE_ADMIN' => array
                                                                (
                                                                    $this->get('translator')->trans('Yes') => 'ROLE_ADMIN'
                                                                ),
                                                                'ROLE_TEACHER' => array
                                                                (
                                                                    $this->get('translator')->trans('Yes') => 'ROLE_TEACHER'
                                                                ),
                                                                'ROLE_STUDENT' => array
                                                                (
                                                                    $this->get('translator')->trans('Yes') => 'ROLE_STUDENT'
                                                                ),
                                                                'ROLE_PARENT' => array
                                                                (
                                                                    $this->get('translator')->trans('Yes') => 'ROLE_PARENT'
                                                                ),
                                                            ) 
                                                            ,
                                                            'multiple' => true,
                                                            'required' => true,
                                                            ) )
                /*->add('username', TextType::class, array(
                                                            'attr'  =>  array('class' => 'form-control',
                                                                              'style' => 'margin:5px 0;')
                                                         ) )
                ->add('password', TextType::class, array(
                                                            'attr'  =>  array('class' => 'form-control',
                                                                              'style' => 'margin:5px 0;')
                                                         ) )*/
                ->add('phonenumber', TextType::class, array(
                                                            'attr'  =>  array('class' => 'form-control',
                                                                              'style' => 'margin:5px 0;')
                                                         ) )
                ->add('Update User', SubmitType::class, array(
                                                            'attr'  =>  array('class' => 'btn btn-primary',
                                                                              'style' => 'margin:15px 0;')
                                                         ) )
                ->getForm();
        
        $form->handleRequest($request);
		//print_r($form);
		//die();
		
		if( $form->isSubmitted() && $form->isValid() )
		{
			$fname  = $form['firstname']->getData();
            $lname  = $form['lastname']->getData();
            $email  = $form['email']->getData();
			$role	= $form['roles']->getData();
            //$uname  = $form['username']->getData();
            //$pass   = $form['password']->getData();
            $phone  = $form['phonenumber']->getData();
			
			$em 	= $this->getDoctrine()->getManager();
			$user	= $em->getRepository('EDUBundle:Users')
                     ->find($id);
			
			// create new user
            $user->setFirstname($fname);
            $user->setLastname($lname);
            $user->setEmail($email);
			$user->setRoles($role);
            //$user->setUsername($uname);
            //$user->setPlainPassword($pass);
            $user->setPhoneNumber($phone);
			
			$em->flush();
            
            $this->addFlash(
                'notice',
                $translator->trans('%US_UD%')
            );
			
			return $this->redirectToRoute('user_list');
		}
		
        return $this->render('EDUBundle:users:layout_edit_user.html.twig',
							array(
								array(	'user'	=>	$user,
										'form'  =>  $form->createView()
								),
								'title' => 'Edit User',
								'form'  =>  $form->createView()
							)
        );
    }
	
	
	/**
     *Delete User Page
     *
     *@Route("/user/delete/{id}", name="user_delete")
     */
	public function deleteuserAction( $id )
	{
		//translations
        $translator = $this->get('translator');
		
		$em     = $this->getDoctrine()->getManager();
        $user   = $em->getRepository('EDUBundle:Users')->find($id);
        
        return $this->render(
                            'EDUBundle:users:layout_user_delete.html.twig',
                            array(
                                'user' => $user,
                                'title' => $translator->trans('%User%'),
                                'tables' => 1
                            )
        );
	}
	
	
	/**
     *Delete User Page
     *
     *@Route("/delete/{id}", name="delete_user")
     */
	public function deleteAction( $id )
	{
		//translations
        $translator = $this->get('translator');
		
		$em     = $this->getDoctrine()->getManager();
        $user   = $em->getRepository('EDUBundle:Users')->find($id);
		$role	= $user->getRoles();
		
		// deleting ROLE_STUDENT
		if( in_array('ROLE_STUDENT', $role) ) // the user is a STUDENT
		{
			// delete from the STUDENT table
			$student = $em->getRepository('EDUBundle:Student')->findOneBy( array('users' => $id) );
			if( $student ) // student is existing in the STUDENT table
			{
				$em->remove($student);
			}
		}
		
		// deleting ROLE_TEACHER
		if( in_array('ROLE_TEACHER', $role) ) // the user is a TEACHER
		{
			$classNames = array(); // teacher assigned class names
			//$subNames	= array(); // teacher assigned subject names
			$schedNames	= array(); // teacher assigned schedules
			$stdNames	= array(); // teacher assigned students as parent
			$errorMsg	= array(); // list of error messages as an array
			
			// check if the teacher is assgined to classes
			$classes = $em->getRepository('EDUBundle:Teacher')->findBy( array('users' => $id) );
			if( $classes ) // yes the teacher assigned to classes
			{
				foreach( $classes as $class )
				{
					$classNames[] = $class->getClasses()->getClassName();
				}
				
				if( $classNames )
				{
					$errorMsg[] = $translator->trans( 	'Teacher can not be deleted. Already assigned to %classes% class(es)',
														array( '%classes%'	=> implode(', ', $classNames) ) );
				}
				
			}
			
			// check if the teacher is assgined to subjects
			$subs = $em->getRepository('EDUBundle:TeacherSubjects')->findBy( array('teachers' => $id) );
			if( $subs ) // yes the teacher assigned to subjects
			{
				foreach( $subs as $sub )
				{
					//$subNames[] = $sub->getSubjects()->getName();
					$em->remove($sub);
					$em->flush();
				}
				
				//if( $subNames )
				//{
				//	$errorMsg[] = $translator->trans( 	'Teacher can not be deleted. Already assigned to %subjects% subject(s)',
				//										array( '%subjects%'	=> implode(', ', $subNames) ) );
				//}
			}
			
			
			// check if the teacher is assgined as parent
			$parents = $em->getRepository('EDUBundle:Student')->findBy( array('parents' => $id) );
			if( $parents ) // yes the teacher assigned to subjects
			{
				foreach( $parents as $parent )
				{
					$stdNames[] = $parent->getUsers()->getFirstname() . ' ' .  $parent->getUsers()->getLastname();
				}
				
				if( $stdNames )
				{
					$errorMsg[] = $translator->trans( 	'Teacher can not be deleted. Already assigned as parent for %students% student(s)',
														array( '%students%'	=> implode(', ', $stdNames) ) );
				}
			}
			
			if( $errorMsg ) // Teacher cannot delete as assigned to Classes, Subjects or schedules
			{
				foreach( $errorMsg as $message )
				{
					$this->addFlash('warning', $message );
				}
				
				return $this->redirectToRoute('user_delete',
											  array( 'id' => $id ));
			}
		}
		
		// deleting ROLE_PARENT
		if( in_array('ROLE_PARENT', $role) ) // the user is a PARENT
		{
			$childrens = array();
			
			$childs = $em->getRepository('EDUBundle:Student')->findBy( array('parents' => $id) );
			
			if( $childs ) // the parent has assigned students
			{
				foreach( $childs as $child )
				{
					$childrens[] = $child->getUsers()->getFirstname() . ' ' .  $child->getUsers()->getLastname();
				}
				
				$this->addFlash('warning',
								$translator->trans('Parent cannot be deleted. Already assigned as parent for %childs% student(s)',
												   array( '%childs%' => implode(', ', $childrens) )));
				
				return $this->redirectToRoute('user_delete',
											  array( 'id' => $id ));
			}
		}
		
		$user->setEnabled('0');
		$em->flush();
        
        return $this->redirectToRoute('user_list');
	}
	
	
	/**
	 *@Route("/class/all", name="class_all")
	 */
	public function listAllClassAction(Request $request)
	{
		//translations
        $translator = $this->get('translator');
		
		$classes = new Classes();
		
		$em 	 = $this->getDoctrine()->getManager();
        $classes = $em->getRepository('EDUBundle:Classes')->findAll();

        return $this->render(
            'EDUBundle:class:layout_all_classes.html.twig',
            array(
                'classes'	=> $classes,
                'title' 	=> $translator->trans('%Classes%'),
                'tables' 	=> 1
            )
        );
	}


    /**
     * @Route("/class/add", name="class_new")
     */
    public function createNewClassAction(Request $request)
    {
		//translations
        $translator = $this->get('translator');
		$classes = new Classes();

			$form = $this->createFormBuilder($classes)
				->add('className',
					  TextType::class, array(
											 'attr'  =>  array('class' => 'form-control',
                                            'style' => 'margin:5px 0;'),
											 'label' =>
											 $translator->trans('%className_addClassFrom%', array(), 'messages')
											)
					  )
				/*
				->add('Add Class',
					  SubmitType::class, array('attr'  =>  array('class' 								=> 'btn btn-primary',
                                                    'style' => 'margin:15px 0;'),
											   'label' => 'Add Class_addClassFrom'

					  TextType::class, array('attr'  =>
											 array('class' => 'form-control',
                                            'style' => 'margin:5px 0;'),
											 'label' =>$translator->trans('%classNameClassAddForm%',array(),'messages')
                                                         )
					  )
					  */
				->add('Add Class', SubmitType::class, array(
                                                            'attr'  =>  array('class' => 'btn btn-primary',
                                                        'style' => 'margin:15px 0;'),
														'label' =>$translator->trans('%Add ClassClassAddForm%',array(),'messages')

                                                         ) )
				->getForm();
		
		
		
		
		$form_load = $form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
        {
            $cName	= $form['className']->getData();
            
            // create new class
            $classes->setClassName($cName);
            
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($classes);
            $em->flush();
            
            $this->addFlash(
                'notice',
                $translator->trans('%NewClassAdded%')
            );
            
            return $this->redirectToRoute('class_all');
        }
		
		return $this->render(
							'EDUBundle:class:layout_new_class.html.twig',
							array(
								'title' => $translator->trans('%Classes%'),
								'form'  =>  $form->createView()
							)
		);
    }
	
	
	/**
	 *@Route("/class/edit/{id}", name="class_edit")
	 */
	public function classEditAction($id, Request $request)
	{
		//translations
        $translator = $this->get('translator');
		
		$em 		= $this->getDoctrine()->getManager();
		$class		= $em->getRepository('EDUBundle:Classes')->find($id);
		
		$class->setClassName( $class->getClassName() );
		
		$form = $this->createFormBuilder($class)
				->add('className', TextType::class, array(
                                                            'attr'  =>  array('class' => 'form-control',
                                                        'style' => 'margin:5px 0;'),
												'label' =>$translator->trans('%classNameAddClassForm%',array(),'messages')
                                                         ) )
				->add('Update Class', SubmitType::class, array(
                                                            'attr'  =>  array('class' => 'btn btn-primary',
                                                            'style' => 'margin:15px 0;'),
															'label' =>$translator->trans('%Update ClassAddClassForm%',array(),'messages')
                                                         ) )
				->getForm();
				
		$form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
		{
			$cName	= $form['className']->getData();
			
			$em 	= $this->getDoctrine()->getManager();
			$class	= $em->getRepository('EDUBundle:Classes')
						->find($id);
				
            $class->setClassName($cName);
				
			$em->flush();
				
            $this->addFlash(
                'notice',
                $translator->trans('%ClassUpdated%')
            );
			
			return $this->redirectToRoute('class_all');
		}
		
		return $this->render(	'EDUBundle:class:layout_edit_class.html.twig',
								array(	'title' 	=> $translator->trans('%EditClass%'),
										'form'  	=> $form->createView(),
										'class'		=> $class,
										//'subjects'	=> $clsSubs
									)
		);
	}
	
	
	/**
	 *@Route("/class/delete/{id}", name="class_delete_msg")
	 */
	public function deleteClassConfirmAction($id, Request $request)
	{
		//translations
        $translator = $this->get('translator');
		
		$em     = $this->getDoctrine()->getManager();
        $user   = $em->getRepository('EDUBundle:Classes')->find($id);
        
        return $this->render(
                            'EDUBundle:class:layout_class_delete.html.twig',
                            array(
                                'class' => $user,
                                'title' => $translator->trans('%DeleteClass%'),
                                'tables' => 1
                            )
        );
	}
	
	
	/**
	 *@Route("/deleteclass/{id}", name="class_delete")
	 */
	public function deleteClassAction($id, Request $request)
    {
        $translator = $this->get('translator');

        $em     = $this->getDoctrine()->getManager();
        
        // Checking for assinged teachers and removing entries
        if($teacher_classes = $em->getRepository('EDUBundle:Teacher')->findBy(array('classes' => $id))){
            foreach($teacher_classes as $teacher_class){
                $em->remove($teacher_class);
            }
            $em->flush();
        }

        // Checking for assigned subjects and removing entries.
        if($class_subjects = $em->getRepository('EDUBundle:ClassSubject')->findBy(array('class' => $id))){
            foreach($class_subjects as $class_subject){
                $em->remove($class_subject);
            }
            $em->flush();
        }

        // Checking for assigned student for particular class
        if($student_classes = $em->getRepository('EDUBundle:Student')->findBy(array('classes' => $id))){
            foreach($student_classes as $student_class){
                $student_class->setClasses(NULL);
                $em->persist($student_class);
            }
            $em->flush();
        }

        $class	= $em->getRepository('EDUBundle:Classes')->find($id);
		$em->remove($class);
		$em->flush();
        
        $this->addFlash(
						'notice',
						$translator->trans('%ClassDeleted%')
					);
		return $this->redirectToRoute('class_all');
	}
	
	
	/**
     *Shows User information
     *
     *@Route("/student/manage/{id}", name="student_manage")
     */
    public function studentAddClassAction( $id, Request $request )
    {
		//translations
        $translator = $this->get('translator');
		
		// get the student from the student table
        $em     = $this->getDoctrine()->getManager();
		$stdUser= $em->getRepository('EDUBundle:Student')
					->findOneBy( array('users' => $id) );
					

		
		
		if( $stdUser ) // student is alredy exists and let's update him
		{
			$class = $stdUser->getClasses();
			$classID	= null === $class ? '' : $class->getId();

			//redirect to the student update table
			return $this->redirectToRoute(	'student_update',
											array(	'id' 	=> $id,
													'class'	=> $classID));
		}
		else // student is not existing in the student table and add him
		{
			//$userID	= $user->getId();
			
			$student = new Student();
			
			$user	= $em->getRepository('EDUBundle:Users')->find($id);
			
			// new class object and create the form
			$classes= $em->getRepository('EDUBundle:Classes')->findAll();
			$form 	= $this->createForm(ClassType::class, $classes);
			$form->handleRequest($request);
			
			if( $form->isSubmitted() && $form->isValid() )
			{	
				$cName	= $form['class']->getData();
				$classID= $cName->getId(); // the classID
				
				$p_repo		= $em->getRepository('EDUBundle:Users')->find($form['parent']->getData());
				$c_repo		= $em->getRepository('EDUBundle:Classes')->find($classID);
				
				//insert new row to the student table
				$student->setParents( $p_repo );
				$student->setClasses( $c_repo );
				$student->setUsers( $user );
				
				$em->persist($student);
				$em->flush();
				
				$this->addFlash('notice',
								$translator->trans('%StudentUpdated%'));
				
				return $this->redirectToRoute('user_students');
			}
			
			return $this->render(	'EDUBundle:student:layout_student_addclass.html.twig',
									array(	'user'	=> $user,
											'title' => 'Add Class',
											'tables'=> 1,
											'form'	=> $form->createView())
			);
		}
    }
	
	
	/**
     * Shows User information
     * @Route("/student/update", name="student_update")
     */
	public function updateStudentAction( Request $request )
	{
		//translations
        $translator = $this->get('translator');
		
		$id 		= $request->query->get('id');
		$classID	= $request->query->get('class');
		
		$em     = $this->getDoctrine()->getManager();
		$user	= $em->getRepository('EDUBundle:Users')->find($id);		// Student to be uodated
		$class	= $em->getRepository('EDUBundle:Classes')->find($classID);// Assigned class to student
		
		$classes= $em->getRepository('EDUBundle:Classes')->findAll();
        $form 	= $this->createForm(StudentEditType::class, $classes);
        $form->get('class')->setData($class);
		$form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
		{
			$student = $em->getRepository('EDUBundle:Student')
							->findOneBy( array('users' => $id) );
							
			$cName	= $form['class']->getData();
			$classID= $cName->getId(); // the classID
			
			//insert new row to the student table
			$student->setClasses( $cName );
			$student->setUsers( $user );
			
			$em->persist($student);
			$em->flush();
			
			$this->addFlash('notice',
							$translator->trans('%StudentUpdated%'));
			
			return $this->redirectToRoute('user_students');
		}
		
		return $this->render(	'EDUBundle:student:layout_student_update.html.twig',
								array(	'user'	=> $user,
										'class'	=> null === $class ? $translator->trans('Not assigned yet') : $class,
										'title' => $translator->trans('%UpdateStudent%'),
										'tables'=> 1,
										'form'	=> $form->createView())
		);
	}
	
    /**
     * @Route("/student/add", name="student_new")
     */
    public function createStudentAction()
    {

        $student = new Student();
        $student->setId(2);
        $student->setParentId(3);
        $student->setClassId(4);

        $em = $this->getDoctrine()->getManager();
        $em->persist($student);
        $em->flush();

        return new Response(
            'Saved new tudent reference with id: '.$student->getId()
        );
    }
    
    /**
     * @Route("/show/student/{id}", name="show_student")
     */
    public function showStudentAction($id)
    {
        $student = $this->getDoctrine()
        ->getRepository('EDUBundle:Student')
        ->find($id);
		
        $className	=$student->getClasses()->getClassName();
        $studentName=$student->getUsers()->getFirstname();
		
        return new Response('The Class Name: '. $className . ' <br/>Student Name: ' . $studentName);
    }
	
	
	/**
     *Assign Classes to the teachers
     *
     *@Route("/teacher/add/class/{id}", name="teacher_addclass")
     */
	public function teacherAddClasses( $id, Request $request )
	{
		// get the classes from the classes table
        $em     		= $this->getDoctrine()->getManager();
		$classes		= $em->getRepository('EDUBundle:Classes')->findAll();
		$user			= $em->getRepository('EDUBundle:Users')->find($id);
		$addedClasses	= $em->getRepository('EDUBundle:Teacher')->findBy(array('users' => $id));
		$cTeacher		= new Teacher();
		
		$form 	= $this->createForm(AddClassType::class, $classes);
		$form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
		{
			$allClasses = $form['classes']->getData();
			foreach( $allClasses as $class )
			{
				
				$classes_repo	= $em->getRepository('EDUBundle:Classes')->find($class->getId());
				//$users_repo		= $em->getRepository('EDUBundle:Users')->find($id);
				
				$teacher= new Teacher();
				$teacher->setClasses( $classes_repo );
				$teacher->setUsers( $user );
				
				$em->persist($teacher);
				$em->flush();
			}
			$this->addFlash('notice',
							$translator->trans('%Classesadded%'));
			
			return $this->redirectToRoute('user_teachers');
		}
		
		return $this->render(
                            'EDUBundle:teacher:layout_teacher_addclass.html.twig',
                            array(
                                'user'		=> $user,
                                'title' 	=> 'Add Classes',
								'teacher'	=> $addedClasses,
                                'tables'	=> 1,
								'form'		=> $form->createView()
                            )
        );
	}
    
	
	
	//=============================== SUBJECTS BACKEND ========================
	
	/**
	 *@Route("/subject/all", name="subject_all")
	 */
	public function allSubjectssAction(Request $request)
	{
		//translations
        $translator = $this->get('translator');
		
		$em 	 = $this->getDoctrine()->getManager();
        $subjects= $em->getRepository('EDUBundle:Subject')->findAll();
        return $this->render(	'EDUBundle:subjects:layout_all_subjects.html.twig',
								array(	'subjects'	=> $subjects,
										'title' 	=> $translator->trans('%Subjects%'),
										'tables' 	=> 1 )
        );
	}


    /**
     * @Route("/subject/add", name="subject_new")
     */
    public function createNewSubjectAction(Request $request)
    {
		//translations
        $translator = $this->get('translator');
		
        $subject = new Subject();
		
		$form = $this->createFormBuilder($subject)

				->add('name',
					  TextType::class, array('attr'  =>  array(	'class' => 'form-control',
                                'style' => 'margin:5px 0;'),
								//'label'=>$translator->trans('%NameAddSubject%',array(),'messages')
								'label'=>$translator->trans('Subject Name',array(),'messages')
                                                         ))
				->add('Add Subject', SubmitType::class, array('attr'=>  	array('class' => 'btn btn-primary',
									'style' => 'margin:15px 0;'),
									//'label'=>$translator->trans('%Add SubjectBtn%',array(),'messages')
									'label'=>$translator->trans('Add Subject',array(),'messages')
									))
				->getForm();
				/*
				 *'label' =>$translator->trans('%classesEditSubjectForm%',array(),'messages')
				 *
				 */
			
		$form_load = $form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
        {
            $sName	= $form['name']->getData();
            
            // create new subject
            $subject->setName($sName);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($subject);
            $em->flush();
            
            $this->addFlash(	'notice',
								$translator->trans('%NewSubjectAdded%') );
            
            return $this->redirectToRoute('subject_all');
        }
		
		return $this->render(	'EDUBundle:class:layout_new_class.html.twig',
								array(	'title' => $translator->trans('%AddNewSubject%'),
										'form'  =>  $form->createView() )
		);
    }
	
	
	/**
	 *@Route("/subject/edit/{id}", name="subject_edit")
	 */
	public function subjectEditAction( $id, Request $request )
	{
		//translations
        $translator = $this->get('translator');
		
		$subject   = $this->getDoctrine()
						->getRepository('EDUBundle:Subject')
						->find($id);
			
		//$class->setClassName( $class->getClassName() );
		
		$form = $this->createFormBuilder($subject)
				->add('name', TextType::class, array(	'attr'  =>  array(	'class' => 'form-control',
																			'style' => 'margin:5px 0;'),
													 'label'=>$translator->trans('%NameEditSubject%',array(),'messages')
                                                         ) )
				->add('Update Subject', SubmitType::class, array(	'attr'  =>  array(	'class' => 'btn btn-primary',
																						'style' => 'margin:15px 0;'),
																 'label'=>$translator->trans('%Update SubjectBtn%',array(),'messages')
                                                         ) )
				->getForm();
				
		$form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
        {
            $sName	= $form['name']->getData();
            
            // create new subject
            $subject->setName($sName);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($subject);
            $em->flush();
            
            $this->addFlash(	'notice',
								$translator->trans('%Subject Updated%') );
            
            return $this->redirectToRoute('subject_all');
        }
		
		return $this->render(
							'EDUBundle:class:layout_new_class.html.twig',
							array(
								'title' 	=> $translator->trans('%EditSubject%'),
								'form'  	=>  $form->createView(),
								'subjectr'	=> 	$subject
							)
		);
	}
	
	
	/**
	 *@Route("/subject/delete/{id}", name="subject_delete_msg")
	 */
	public function dellassConfirmAction($id, Request $request)
	{
		//translations
        $translator = $this->get('translator');
		
		$em     = $this->getDoctrine()->getManager();
        $subject= $em->getRepository('EDUBundle:Subject')->find($id);
        
        return $this->render(	'EDUBundle:subjects:layout_subjects_delete.html.twig',
								array(	'subject'	=> $subject,
										'title' 	=> $translator->trans('%DeleteSubject%'),
										'tables'	=> 1
                            )
        );
	}
	
	
	/**
	 *@Route("/subject/delete/confirm/{id}", name="subject_delete_confirm")
	 */
	public function subjectDeleteConfirmAction($id, Request $request)
	{
		//translations
        $translator = $this->get('translator');

		$em     = $this->getDoctrine()->getManager();
        // Checking for assinged teachers and removing entries
        if($teacher_subjects = $em->getRepository('EDUBundle:TeacherSubjects')->findBy(array('subjects' => $id))){
            foreach($teacher_subjects as $teacher_subject){
                $em->remove($teacher_subject);
            }
            $em->flush();
        }

        // Checking for assigned subjects and removing entries.
        if($class_subjects = $em->getRepository('EDUBundle:ClassSubject')->findBy(array('subjects' => $id))){
            foreach($class_subjects as $class_subject){
                $em->remove($class_subject);
            }
            $em->flush();
        }


		$em     = $this->getDoctrine()->getManager();
        $subject= $em->getRepository('EDUBundle:Subject')->find($id);
		$em->remove($subject);
		$em->flush();
        
        $this->addFlash(	'notice',
							$translator->trans('%SubjectDeleted%') );
		return $this->redirectToRoute('subject_all');
	}
	
	
	//=============================== SUBJECTS BACKEND ========================
	
	//=============================== CLASS_SUBJECTS BACKEND ==================
	
	/**
	 * @Route("/class/add/subject/{id}", name="class_subject_add")
	 * @param	classID
	 */
	public function addClassSubjectAction( $id, Request $request )
	{
		//$classSub 	= new ClassSubject();
		
		$em 		= $this->getDoctrine()->getManager();
        $class		= $em->getRepository('EDUBundle:Classes')->find($id);
		$subjects	= $em->getRepository('EDUBundle:Subject')->findAll();
		
		$form 		= $this->createForm(ClassSubjectType::class,$subjects);
		$form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
		{
			$allSubjects 	= $form['subject']->getData();
			$addedSubs		= array();
			
			foreach( $allSubjects as $subject )
			{
				$subject_repo 	= $em->getRepository('EDUBundle:ClassSubject')->findBy(array( 'subjects' 	=> $subject->getId(),
																								'class' 	=> $id ));
				
				if($subject_repo){
					$addedSubs[] = $subject->getName();
					continue;
				}
				
				$clsSubject		= new ClassSubject();
				$clsSubject->setClass($class);
				$clsSubject->setSubjects($subject);
				
				$em->persist($clsSubject);
				$em->flush();
			}
			
			if($addedSubs)
			{
				$this->addFlash('warning',
								$translator->trans('%SubAddedWr%') . implode( ", ", $addedSubs ) );
			}
			else
			{
				$this->addFlash('notice',
								$translator->trans('%SUBS_ADDED%'));
			}
			
			
				
			return $this->redirectToRoute('class_all');
		}
		
		//	
		return $this->render(	'EDUBundle:Form:layout_commom_form.html.twig',
								array(	'title' 	=> 'Add Subjects',
										'form'  	=>  $form->createView(),
										'message'	=> '')
		);
	}
	
	
	/**
	 *@Route("/class/edit/subject/{id}", name="class_edit_subs")
	 *@param	classID(classesTable)
	 */
	public function editClassSubjectsAction( $id, Request $request )
	{
		//translations
        $translator = $this->get('translator');
		
		$em 		= $this->getDoctrine()->getManager();
        $subjects	= $em->getRepository('EDUBundle:ClassSubject')->findBy( array('class'	=> $id) );
		$class		= $em->getRepository('EDUBundle:Classes')->find( $id );
		$allsubs	= $em->getRepository('EDUBundle:Subject')->findAll();
		
		$dataAllsubs = array();
		foreach ($allsubs as $allsub){
			$dataAllsubs[$allsub->getName()] = $allsub->getId();
		}
		
		$dataClsSubs = array();
		foreach ($subjects as $subject){
			$dataClsSubs[$subject->getSubjects()->getName()] = $subject->getSubjects()->getId();
		}
		
		$form = $this->createFormBuilder($subjects)
				->add('classes',
					  ChoiceType::class,
					  array(//'class' 		=> 'EDUBundle:Subject',
							'expanded'  => true,
							'multiple'  => true,
							'attr'  	=> array(	'class' => 'form-control',
													'style' => 'height:auto;;'),
							'choices' 	=> $dataAllsubs,
							'data' 		=> $dataClsSubs,
							'label' =>$translator->trans('%classesEditSubjectForm%',array(),'messages')
							))
				
				->add('Update Subject', SubmitType::class, array(
														'attr'  =>  array(	'class' => 'btn btn-primary',
														'style' => 'margin:15px 0;'),
														'label' =>$translator->trans('%Update Subject_EditSubjectForm%',array(),'messages')
                                                         ) )
				->getForm();
		
		$form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
		{
			$classes = $form['classes']->getData(); // form submitted subjects
			
			// delete existing subjects in the "ClassSubject"
			$delSubs = array_diff($dataClsSubs, $classes); // subjects that are previously added but now want to delete from the class
			foreach( $delSubs as $key => $value )
			{
				
				$delSub = $em->getRepository('EDUBundle:ClassSubject')->findOneBy( array(	'class'		=> $id,
																							'subjects'	=> $value) );
				
				$em->remove($delSub);
				$em->flush();
			}
			
			$clsSubs = $em->getRepository('EDUBundle:ClassSubject')->findBy( array('class'=> $id) ); // existing subjects in "ClassSubject"
			foreach( $classes as $key => $value )
			{
				$clsSub	= $em->getRepository('EDUBundle:ClassSubject')->findBy( array('class'		=> $id,
																						'subjects'	=> $value) );
				
				if($clsSub) // the submitted subject is already exists in the "ClassSubject" table
				{
					continue;
				}
				else // the submitted subject is not in the "ClassSubject" so adding it as new subject
				{
					$sub	= $em->getRepository('EDUBundle:Subject')->find( $value );
					$clsSubject		= new ClassSubject();
					$clsSubject->setClass($class);
					$clsSubject->setSubjects($sub);
					
					$em->persist($clsSubject);
					$em->flush();
				}
				
			}
			$this->addFlash('notice',
							$translator->trans('%EDIT_NTC_SUB%'));
			
			return $this->redirectToRoute('class_all');
			
		}
		
		return $this->render(	'EDUBundle:Form:layout_editsub_form.html.twig',
								array(	'title' 	=> $translator->trans('%EditSubjects%'),
										'form'  	=>  $form->createView(),
										'message'	=> $translator->trans('%ClsSubMsg%') )
		);
	}
	
	//=============================== CLASS_SUBJECTS BACKEND ==================
	
	//=============================== TEACHER_SUBJECTS BACKEND ==================
	
	/**
     *@Route("/teacher/edit/class/{id}", name="teacher_edit_class")
     *@param	teacherID(users Table)
     */
	public function editTeacherClassAction( $id, Request $request )
	{
		//translations
        $translator = $this->get('translator');
		
		$em 		= $this->getDoctrine()->getManager();
        $teacher	= $em->getRepository('EDUBundle:Users')->find($id);
		$classes	= $em->getRepository('EDUBundle:Teacher')->findBy( array('users' => $id) );
		$allClss	= $em->getRepository('EDUBundle:Classes')->findAll();
		
		$dataAllcls = array(); // all Classes from Classes
		foreach ($allClss as $cls)
		{
			$dataAllcls[$cls->getClassName()] = $cls->getId();
		}
		
		$dataClss 	= array(); // all classes from Teacher
		foreach ($classes as $class)
		{
			$dataClss[$class->getClasses()->getClassName()] = $class->getClasses()->getId();
		}
		
		//print_r($dataAllcls);
		//echo '<br><br><br><br>';
		//print_r($allClss);
		
		$form = $this->createFormBuilder($classes)
				->add('classes',
					  ChoiceType::class,
					  array('expanded'  => true,
							'multiple'  => true,
							'attr'  	=> array(	'class' => 'form-control',
													'style' => 'height:auto'),
							'choices' 	=> $dataAllcls,
							'data' 		=> $dataClss,
							'label' =>$translator->trans('%classesTeacherEditClass%',array(),'messages')
							))
				
				->add('Update Classes',
					  SubmitType::class,
					  array(	'attr'  =>  array(	'class' => 'btn btn-primary',
													'style' => 'margin:15px 0;'),
							'label' =>$translator->trans('%Update ClassesTeacherEditClass%',array(),'messages')
							))
				->getForm();
		$form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
		{
			$classes = $form['classes']->getData(); // form submitted classes
			//print_r($classes);die;
			
			// delete existing classes in the "Teacher"
			$delClss = array_diff($dataClss, $classes); // subjects that are previously added but now want to delete from the class
			foreach( $delClss as $key => $value )
			{
				
				$delCls = $em->getRepository('EDUBundle:Teacher')->findOneBy( array(	'users'		=> $id,
																						'classes'	=> $value) );
				
				$em->remove($delCls);
				$em->flush();
			}
			
			
			foreach( $classes as $key => $value )
			{
				$tCls	= $em->getRepository('EDUBundle:Teacher')->findBy( array(	'users'		=> $id,
																					'classes'	=> $value) );
				
				if($tCls) // the submitted class is already exists in the "Teacher" table
				{
					continue;
				}
				else // the submitted class is not in the "Teacher" so adding it as new class
				{
					$cls = $em->getRepository('EDUBundle:Classes')->find( $value );
					$tClass = new Teacher();
					$tClass->setUsers($teacher);
					$tClass->setClasses($cls);
					
					$em->persist($tClass);
					$em->flush();
				}
				
			}
			$this->addFlash('notice',
							$translator->trans('%ED_NTC_CLS%'));
			
			return $this->redirectToRoute('user_teachers');
		}
		
		return $this->render(	'EDUBundle:Form:layout_editsub_form.html.twig',
								array(	'title' 	=> $translator->trans('%ED_CLS%'),
										'form'  	=> $form->createView(),
										'message'	=> $translator->trans('%ED_CLS_MSG%'))
		);
	}
	
	/**
	 *@Route("/teacher/edit/subject/{id}", name="teacher_edit_subs")
	 *@param	teacherID(users Table)
	 */
	public function editTeacherSubjectsAction( $id, Request $request )
	{
		//translations
        $translator = $this->get('translator');
		
		$em 		= $this->getDoctrine()->getManager();
		
        $teacher	= $em->getRepository('EDUBundle:Users')->find($id); // This variable uses to assign subjects below
		$subjects	= $em->getRepository('EDUBundle:TeacherSubjects')->findBy( array('teachers' => $id) );
		$allsubs	= $em->getRepository('EDUBundle:Subject')->findAll();
		
		//----------
		$teacher_class_entries	= $em->getRepository('EDUBundle:Teacher')->findBy( array('users' => $id) );
		
		$dataAllsubs = array();
		
		foreach( $teacher_class_entries as $teacher_class_entry ){
			$ClassSubjects = $em->getRepository('EDUBundle:ClassSubject')->findBy(array('class'=>$teacher_class_entry->getClasses()));
			
			foreach( $ClassSubjects as $ClassSubject ){
				$dataAllsubs[$ClassSubject->getSubjects()->getName()] = $ClassSubject->getSubjects()->getId();
			}
		}
		//---------
		
		$dataAllsubs_arr = array(); // all subjects from Subject
		foreach ($allsubs as $allsub){
			$dataAllsubs_arr[$allsub->getName()] = $allsub->getId();
		}
		
		$dataSubs = array(); // all subjects from TeacherSubjects
		foreach ($subjects as $subject){
			$dataSubs[$subject->getSubjects()->getName()] = $subject->getSubjects()->getId();
		}
		
		//print_r($subjects);die;
		
		$form = $this->createFormBuilder($subjects)
				->add('classes',
					  ChoiceType::class,
					  array('expanded'  => true,
							'multiple'  => true,
							'attr'  	=> array(	'class' => 'form-control',
													'style' => 'height:auto;'),
							'choices' 	=> $dataAllsubs,
							'data' 		=> $dataSubs,
							'label' =>$translator->trans('%classesEditSubject%',array(),'messages')
							))
				
				->add('Update Subject',
					  SubmitType::class,
					  array(	'attr'  =>  array(	'class' => 'btn btn-primary',
													'style' => 'margin:15px 0;'),
							'label' =>$translator->trans('%Update SubjectEditSubject%',array(),'messages')
							))
				->getForm();
		$form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
		{
			$classes = $form['classes']->getData(); // form submitted subjects
			//print_r($classes);die;
			// delete existing subjects in the "ClassSubject"
			$delSubs = array_diff($dataSubs, $classes); // subjects that are previously added but now want to delete from the class
			
			foreach( $delSubs as $key => $value )
			{
				
				$delSub = $em->getRepository('EDUBundle:TeacherSubjects')->findOneBy( array(	'teachers'		=> $id,
																								'subjects'	=> $value) );
				
				$em->remove($delSub);
				$em->flush();
			}
			
			//$clsSubs = $em->getRepository('EDUBundle:TeacherSubjects')->findBy( array('class'=> $id) ); // existing subjects in "ClassSubject"
			foreach( $classes as $key => $value )
			{
				$clsSub	= $em->getRepository('EDUBundle:TeacherSubjects')->findBy( array(	'teachers'	=> $id,
																							'subjects'	=> $value) );
				
				if($clsSub) // the submitted subject is already exists in the "TeacherSubjects" table
				{
					continue;
				}
				else // the submitted subject is not in the "TeacherSubjects" so adding it as new subject
				{
					$sub	= $em->getRepository('EDUBundle:Subject')->find( $value );
					$tSubject = new TeacherSubjects();
					$tSubject->setTeachers($teacher);
					$tSubject->setSubjects($sub);
					
					$em->persist($tSubject);
					$em->flush();
				}
				
			}
			$this->addFlash('notice',
							$translator->trans('%EDIT_NTC_SUB%'));
			
			return $this->redirectToRoute('user_teachers');
		}
		
		return $this->render(	'EDUBundle:Form:layout_editsub_form.html.twig',
								array(	'title' 	=> $translator->trans('%EDIT_SUB%'),
										'form'  	=> $form->createView(),
										'message'	=> $translator->trans('%EDIT_MSG%'))
		);
	}
	
	/**
	 * @Route("/teacher/add/subject/{id}", name="teacher_subject_add")
	 * @param	classID
	 */
	public function addTeacherSubjectAction( $id, Request $request )
	{
		//translations
        $translator = $this->get('translator');
		
		$em 		= $this->getDoctrine()->getManager();
        $user		= $em->getRepository('EDUBundle:Users')->find($id);
		$subjects	= $em->getRepository('EDUBundle:Subject')->findAll();
		
		$form 		= $this->createForm(ClassSubjectType::class,$subjects);
		$form->handleRequest($request);
		
		if( $form->isSubmitted() && $form->isValid() )
		{
			$allSubjects 	= $form['subject']->getData();
			$addedSubs	 	= array();
			
			foreach( $allSubjects as $subject )
			{
				$subject_repo 	= $em->getRepository('EDUBundle:TeacherSubjects')->findBy( array( 'subjects' 	=> $subject->getId(),
																									'teachers'	=> $id) );
				//$subject_repo 	= $em->getRepository('EDUBundle:ClassSubject')->findBy(array( 'subjects' => $subject->getId()));
				
				if($subject_repo){
					$addedSubs[] = $subject->getName();
					continue;
				}
				
				$teacherSubject	= new TeacherSubjects();
				$teacherSubject->setTeachers($user);
				$teacherSubject->setSubjects($subject);
				
				$em->persist($teacherSubject);
				$em->flush();
			}
			if($addedSubs)
			{
				$this->addFlash('notice',
								$translator->trans('%SUB_ADDED_MSG%') . implode( ", ", $addedSubs ) );
			}
			else
			{
				$this->addFlash('notice',
								$translator->trans('%SUBS_ADDED%'));
			}
				
			return $this->redirectToRoute('user_teachers');
		}
		
		return $this->render(	'EDUBundle:Form:layout_commom_form.html.twig',
								array(	'title' 	=> $translator->trans('%ADD_SUBS%'),
										'form'  	=>  $form->createView(),
										'message'	=> '')
		);
	}
	
	//=============================== TEACHER_SUBJECTS BACKEND ==================
	
	
	//----------------------- PROTECTED FUNCTIONS ------------------------------
	
	/**
	* Get user id
	* @return integer $userId
	*/
	public function getUserId()
	{
		$user 	= $this->get('security.token_storage')->getToken()->getUser();
        $userId = $user->getId();
		
		return $userId;
	}
	
	/**
	* Get current user
	* @return user
	*/
	public function getCurrentUser()
	{
		if($this->get('security.token_storage') && $this->get('security.token_storage')->getToken()){
			$user 	= $this->get('security.token_storage')->getToken()->getUser();
			return $user;
		}
		else
			return false;
	}
	
	/**
	 * Get all admins
	 * @param 	null
	 * @return	all admins as objects
	 */
	public function getAdmins()
	{
		$query = $this->getDoctrine()->getEntityManager()
						->createQuery('SELECT u FROM EDUBundle:Users u WHERE u.roles LIKE :role')
						->setParameter('role', '%"ROLE_ADMIN"%' );
		return $users = $query->getResult();
	}
	
	/**
	 *@abstract	Check the given class and subject assigned in class_subject table
	 *@param	class, subject
	 *@return	TRUE(is exists) else FALSE
	 */
	function classHasSub( $class, $subject )
	{
		$em 	= $this->getDoctrine()->getManager();
        $result	= $em->getRepository('EDUBundle:ClassSubject')
					->findBy( array(	'class' 	=> $class,
										'subjects'	=> $subject ) );
		if( $result )
			return TRUE;
		else
			return FALSE;
	}
	
	
	/**
	 *@abstract	Check the given teacher and class assigned in teacher table
	 *@param	teacher, subject
	 *@return	TRUE(is exists) else FALSE
	 */
	function teacherHasClass( $teacher, $class )
	{
		$em 	= $this->getDoctrine()->getManager();
        $result	= $em->getRepository('EDUBundle:Teacher')
					->findBy( array('users'		=> $teacher,
									'classes'	=> $class ) );
		if( $result )
			return TRUE;
		else
			return FALSE;
	} 
	
}
