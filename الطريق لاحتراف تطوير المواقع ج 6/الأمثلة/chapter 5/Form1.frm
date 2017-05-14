VERSION 5.00
Begin VB.Form Form1 
   Caption         =   "XML update"
   ClientHeight    =   3480
   ClientLeft      =   120
   ClientTop       =   465
   ClientWidth     =   4515
   LinkTopic       =   "Form1"
   ScaleHeight     =   3480
   ScaleWidth      =   4515
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton Command1 
      Caption         =   " ÕœÌÀ"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   15
         Charset         =   178
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   615
      Left            =   1080
      TabIndex        =   0
      Top             =   2640
      Width           =   2415
   End
End
Attribute VB_Name = "Form1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim x As String
Private Sub Command1_Click()
Print x
End Sub

Private Sub Form_Load()
Dim xml_doc As New MSXML2.DOMDocument
xml_doc.Load ("update.xml")
Dim xml_tag As IXMLDOMElement
Set xml_tag = xml_doc.selectSingleNode("title")
x = xml_tag.Text
End Sub
